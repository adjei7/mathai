<?php
// Include the apikey.php file to get the API key
include 'apikey.php';

// Set the content type to JSON, as we will be returning JSON data
header('Content-Type: application/json');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the POST data from the frontend (JSON data)
    $input = json_decode(file_get_contents('php://input'), true);

    // Check if conversationMessages is set
    if (isset($input['conversationMessages'])) {
        $conversationMessages = $input['conversationMessages'];

        // Initialize cURL to call the OpenAI API
        $ch = curl_init('https://api.openai.com/v1/chat/completions');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            "Authorization: Bearer $api_key "  // Correctly formatted with single quotes around the Bearer token
        ]);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
            'model' => 'gpt-4o',  // Or 'gpt-3.5-turbo'
            'messages' => $conversationMessages,
            'max_tokens' => 150,
            'temperature' => 0.7
        ]));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the API request and get the response
        $response = curl_exec($ch);

        // Check if the API request was successful
        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);
            // Return an error message in case of failure
            echo json_encode(['error' => 'Curl Error: ' . $error]);
            exit;
        }

        curl_close($ch);

        // Send the API response back to the frontend
        echo $response;

    } else {
        // If conversationMessages is not set, return an error
        echo json_encode(['error' => 'No conversation messages provided']);
    }

} else {
    // If the request method is not POST, return an error
    echo json_encode(['error' => 'Invalid request method']);
}
?>
