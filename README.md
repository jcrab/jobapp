Create a human resources PHP application consisting of the following pages:

* Prompt the user for their first and last names. Provide a submit button that sends the information to the server for processing.  Both fields are required.  Do not advance until you have both.  Use the header("Location: index.php") function to send the browser back to the start until they have entered both fields.
* Display the applicant's name at the top of the next page that includes a check list of skills that include at least: PHP, MariaDB, Python, Java, HTML, CSS, C#, and git. Allow the end-user to select their skills from the list and submit the information.
* On the next page, display a job history form that allows them to type free-form text into an essay-question-style input and submit.
* Create a confirmation page based on all of the information from the previous pages. Display the name, skills, and job history for confirmation. When the user confirms the information they are sent to the results page.  You must use hidden form fields to "save" this information along the way, since HTTP is a stateless protocol.  Do not use any other technique.
* The results page must display "you are accepted for an interview" or "sorry, your application was rejected" based on the current search requirements (we are looking for C++ in the job history).

In addition:

* Use the test_input() function to ensure that all text input is secure.
* Extra Credit: Make sure that the applicant's name includes letters and whitespace only.
