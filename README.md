# mathai

Demo: https://education.kowusu.com/mathai/math11.html

AI-Driven Math App Demo, where AI controls the feedback, levels and motivation features.

This app uses AI to dynamically adjust the (1) feedback, (2) difficulty level, (3) the threshold time for rewards and (4) the triggering of a timed challenge to maintain motivation, all based on per question student performance! Please note the main purpose of this app is for testing AI adapting motivation techniques and not as a live student assement platform.

# Instructions
If the AI thinks you are worthy to move up a level, you move up.
If the AI thinks you are worthy to move down a level, you move down.
Lighting emoji is given if you answer a question within a time threshold (5s).
If you find the questions easy, the threshold is reduced (<5s).
If you find the questions hard, the threshold is increased (>5s).
Feedback is based on your performance, speed and level.
If you take too long to answer questions the AI knows you can do, it can trigger the time trial, where you have to answer 10 questions in 60s, to keep you focused.

The AI uses all the test data: questions, correct answers and your answers, time taken to complete answer, question level, award threshold, and it's own feedback, for every question you do to decide what to do next.

You can trigger the timed challenge manually by clicking the MTC (Manual Timed Challenge) button.

The questions are generated via code at the beginning of each session. The code generates 10 questions in each of 10 levels, totalling 100 questions, all addition ranging in difficulty. To restart a session, refresh the page.

Click on the green chat button to open a chat window, where you can interrogate the AI about your performance. Ask it why it did what it did. Ask if for proof. E.g. 'How many questions did I get right?', 'Why did you start a timed trial?', 'Why did you not take me to the next level?'.

# Installation
You need an openAI API account for the app to work. Make sure you have GPT-4o enabled. If you want to use a different model, you can change it in the openai.php document.

1. Upload all files to the same folder on a server with PHP.
2. Add your OpenAI api key to apikey.php.
3. navigate your browser to the math11.html file.

How the files work
apikey.php - holds your apikey (Keep this private).
openai.php - sends the api call to openai using the api key in apikey.php.
math11.html - holds the html, css, js that manages the app.

Enjoy :)
