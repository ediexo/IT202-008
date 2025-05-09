<table><tr><td> <em>Assignment: </em> Init DB Setup</td></tr>
<tr><td> <em>Student: </em> Edie Westrich (mw396)</td></tr>
<tr><td> <em>Generated: </em> 2/26/2023 3:17:58 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/init-db-setup/grade/mw396" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <p>Reminder: Make sure you start in dev and it's up to date</p><ul><li>git checkout dev</li><li>git pull origin dev</li><li>git checkout -b ProjectSetup</li></ul><p>Steps:</p><ol><li>Create a new folder in public_html called <b>Project </b>if it doesn't exist</li><li>create a new folder in Project called <b>sql</b></li><li>Create a new file in sql called init_db.php</li><li>Paste the content from&nbsp;<a href="https://gist.github.com/MattToegel/6a8310e3ac19fe505870e5ebfa8cf4ea">https://gist.github.com/MattToegel/6a8310e3ac19fe505870e5ebfa8cf4ea</a><ul><li>You will get errors if this is not in the proper location</li></ul></li><li>Create another file in sql called 001_create_table_users.sql</li><li>Paste the content from&nbsp;<a href="https://gist.github.com/MattToegel/f3b39da97fba38bd04fc7073ad0a627e">https://gist.github.com/MattToegel/f3b39da97fba38bd04fc7073ad0a627e</a></li><li>Add/commit/push these to the new branch (if you haven't yet)</li><li>Create the pull request on github but do not complete it yet</li><li>Create a new folder in public_html called <b>M4</b></li><li>Create a new file in the M4 folder called m4_submission.md</li><li>Fill out the below deliverables and paste the generated markdown in the file</li><li>Add/commit/push the new changes</li><li>Verify all of the files appear as expected in the ProjectSetup branch<ol><li>M4/m4_submission.md</li><li>Project/sql/init_db.php</li><li>Project/sql/001_create_table_users.sql</li></ol></li><li>Complete the merge/pull request from step 8</li><li>Create a new pull request from dev to prod and complete it</li><li>Go back to your local repo</li><li><code>git checkout dev</code></li><li><code>git pull origin dev</code></li><li>On github, navigate to the prod branch</li><li>Go to the M4 folder</li><li>Click the m4_submission.md</li><li>Paste that url to Canvas as the submission</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Verify Proper Setup </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Visit the init_db.php file in the browser on heroku dev and screenshot the working output (If it says blocked this is still valid for the submission)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/221431841-91d1b27b-e3c5-4e27-865d-e048e94113dc.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>mw396-dev on Heroku showing thee /project/sql/init_db.php file<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Go to your MySQL VS Code extension, click the new table that was generated, screenshot the table shown</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/221433411-fb4b0a5a-448d-46f0-a4ef-f148f07c09f1.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the users table in the VS code my sql extension<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Briefly talk about something you learned (from the readings is preferred over the slides/class)</td></tr>
<tr><td> <em>Response:</em> <p>While trying to troubleshoot some errors I had with my database (i put<br>in the port as 3036 instead of 3306), I learned how the database<br>connected to the server and the public html folder by tracing my errors<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 2: </em> Talk about any issues or difficulties you had in any of the processes and how you resolved them. If you didn't have issues this HW mention a recently resolved issue that wasn't discussed before.</td></tr>
<tr><td> <em>Response:</em> <p>there was an issue where my database wasn&#39;t showing up, the issue being<br>i hadn&#39;t toggled &quot;show connections&quot; on the mysql extension. As previously mentioned, I<br>also typed the port number in wrong<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the pull request link (ProjectSetup to Dev)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/24">https://github.com/Ediexo/IT202-008/pull/24</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Paste the direct link from heroku prod to the init_db.php file (i.e., https://mt85-prod.herokuapp.com/Project/sql/init_db.php)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mw396-prod.herokuapp.com/project/sql/init_db.php">https://mw396-prod.herokuapp.com/project/sql/init_db.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/init-db-setup/grade/mw396" target="_blank">Grading</a></td></tr></table>
