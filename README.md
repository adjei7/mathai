# mathai
AI-Driven Math App Demo, where AI controls the feedback, levels and motivation features

This app uses AI to dynamically adjust the (1) feedback, (2) difficulty level, (3) the threshold time for rewards and (4) the triggering of a timed challenge to maintain motivation, all based on per question student performance! Please note the main purpose of this app is for testing AI adapting motivation techniques and not as a live student assement platform.

You need an openAI API account for the app to work. Make sure you have GPT-4o enabled. If you want to use a different model, you can change it in the openai.php document

1. Upload all files to the same folder on a server with PHP
2. Add your OpenAI api key to apikey.php
3. navigate your browser to the math11.html file

How the files work
apikey.php - holds your apikey (Keep this private)
openai.php - sends the api call to openai using the api key in apikey.php
math11.html - holds the html, css, js that manages the app
