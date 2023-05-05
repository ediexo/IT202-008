<table><tr><td> <em>Assignment: </em> IT202 Milestone1 Deliverable</td></tr>
<tr><td> <em>Student: </em> Edie Westrich (mw396)</td></tr>
<tr><td> <em>Generated: </em> 5/5/2023 2:53:41 AM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mw396" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone1 branch</li><li>Create a milestone1.md file in your Project folder</li><li>Git add/commit/push this empty file to Milestone1 (you'll need the link later)</li><li>Fill in the deliverable items<ol><li>For each feature, add a direct link (or links) to the expected file the implements the feature from Heroku Prod (I.e,&nbsp;<a href="https://mt85-prod.herokuapp.com/Project/register.php">https://mt85-prod.herokuapp.com/Project/register.php</a>)</li></ol></li><li>Ensure your images display correctly in the sample markdown at the bottom</li><ol><li>NOTE: You may want to try to capture as much checklist evidence in your screenshots as possible, you do not need individual screenshots and are recommended to combine things when possible. Also, some screenshots may be reused if applicable.</li></ol><li>Save the submission items</li><li>Copy/paste the markdown from the "Copy markdown to clipboard link" or via the download button</li><li>Paste the code into the milestone1.md file or overwrite the file</li><li>Git add/commit/push the md file to Milestone1</li><li>Double check the images load when viewing the markdown file (points will be lost for invalid/non-loading images)</li><li>Make a pull request from Milestone1 to dev and merge it (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku dev</li></ol></li><li>Make a pull request from dev to prod (resolve any conflicts)<ol><li>Make sure everything looks ok on heroku prod</li></ol></li><li>Submit the direct link from github prod branch to the milestone1.md file (no other links will be accepted and will result in 0)</li></ol></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Feature: User will be able to register a new account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231001515-51ff73d5-c791-4c77-b846-ec5ad1fcbd77.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid email<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231001666-7da1e7ad-2244-473f-b5d0-ee08f91f0e6c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231001858-e7eb035f-51f9-41af-a76d-54f423b65550.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email not available<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231002000-32e8084c-814f-40ea-a3be-e0f3ce3310e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username not available <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231002358-17340f9b-2e10-461e-95e0-d79c3b1b6716.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>valid input data<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Users table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231002613-687a443a-4f14-4ffe-9d9e-ac4b688cf4f7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the user data table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/25">https://github.com/Ediexo/IT202-008/pull/25</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/31">https://github.com/Ediexo/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>Feat User Registration set up the database, sending the information from the form<br>to the SQL database. The form validates if the email follows the pattern<br>of characters associated with an email address (<em><strong>@</strong></em><strong>.</strong>*), as well as if it<br>already exists in the database, and if the password is longer than 8<br>characters. The password is sent through a hashing algorithm so the database does<br>not store the password itself.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Feature: User will be able to login to their account </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add one or more screenshots of the application showing the form and validation errors per the feature requirements</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231019245-bfb84eb5-12eb-45d3-974c-d09474205644.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Pasword invalid <br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231019353-1c9bc2fd-aec0-4d34-bdec-0d7cf7cb1084.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>non-existing user validation <br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of successful login</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236389880-976a028d-d8c4-473b-b686-6ec77ca9b8ee.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A successful login to the account mw3962/<a href="mailto:&#x6d;&#x77;&#x33;&#x39;&#54;&#x32;&#64;&#110;&#106;&#x69;&#116;&#x2e;&#x65;&#x64;&#x75;">&#x6d;&#x77;&#x33;&#x39;&#54;&#x32;&#64;&#110;&#106;&#x69;&#116;&#x2e;&#x65;&#x64;&#x75;</a><br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/25">https://github.com/Ediexo/IT202-008/pull/25</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/49">https://github.com/Ediexo/IT202-008/pull/49</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The form accepts a valid email and password and compares them to the<br>hashed passwords and emails in the database. The password is sent through an<br>encryption algorithm on submit, which compares it to the password hash associated with<br>the same email in the database<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Feat: Users will be able to logout </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the successful logout message</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236390319-a944ffc0-9a38-407e-889d-b5ce06a18e39.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>A successful logout, redirecting to the login page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the logged out user can't access a login-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236390455-09013acb-6cac-42cc-a71d-79319d94627a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>a message is displayed telling the user that they must be logged in<br>to view that page, redirected to the login<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/49">https://github.com/Ediexo/IT202-008/pull/49</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/31">https://github.com/Ediexo/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works</td></tr>
<tr><td> <em>Response:</em> <p>The logout page uses the helper function found in reset_session.php which unsets, destroys,<br>and restarts the user session, and displays a message saying &quot;you have logged<br>out&quot;. this resets the session variables about the users and their roles <br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Feature: Basic Security Rules Implemented / Basic Roles Implemented </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the logged out user can't access a login-protected page (may be the same as similar request)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236390455-09013acb-6cac-42cc-a71d-79319d94627a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user is not logged in, and is redirected to the login page<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing a user without an appropriate role can't access the role-protected page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236390908-a14fe2df-7c57-4116-9643-60e8905aa04b.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Shows that the user mw3962 does not have access to the admin pages<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Roles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236391054-b22d08cd-f490-4c7f-ba0f-36714e22deba.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the Roles table with the admin role<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a screenshot of the UserRoles table with valid data</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236391344-9ec18504-bdc0-42a3-a3fa-21925242a44f.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the circled user (ID 1) is the admin user<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add the related pull request(s) for these features</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/44">https://github.com/Ediexo/IT202-008/pull/44</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/49">https://github.com/Ediexo/IT202-008/pull/49</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Explain briefly how the process/code works for login-protected pages</td></tr>
<tr><td> <em>Response:</em> <p>The session stores values related to the user, such as the username/email, as<br>well as information about the current state, such as a boolean return from<br>is_logged_in(). <br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 7: </em> Explain briefly how the process/code works for role-protected pages</td></tr>
<tr><td> <em>Response:</em> <div>roles are assigned to users in the user roles table. the session saves<br>the user roles in "$roles", which is an array of roles belonging to<br>a specific user ID number in the user roles table. this $roles array<br>is then used to perform logic before showing a page when added to<br>the URL</div><div><br></div><div>The nav function will make sure the navigation does not display a<br>link to any pages that&nbsp; are inaccessible to the user<br></div><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Feature: Site should have basic styles/theme applied; everything should be styled </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots to show examples of your site's styles/theme</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231021112-1afcbe0f-c148-47dd-9388-4e21610904b4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The Login page with styles<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/41">https://github.com/Ediexo/IT202-008/pull/41</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain your CSS at a high level</td></tr>
<tr><td> <em>Response:</em> <p>The navigation is a dark brown color, the same color as the text<br>for the rest of the site. On hover, the link is highlighted in<br>green. The form boxes have padding and the same green as a border.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Feature: Any output messages/errors should be "user friendly" </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of some examples of errors/messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231019353-1c9bc2fd-aec0-4d34-bdec-0d7cf7cb1084.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the email is not found in the user validation<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231019245-bfb84eb5-12eb-45d3-974c-d09474205644.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the user attempts to login with an invalid password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231002000-32e8084c-814f-40ea-a3be-e0f3ce3310e2.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the user attempts to register with a username that has already been taken<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a related pull request</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/28">https://github.com/Ediexo/IT202-008/pull/28</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how you made messages user friendly</td></tr>
<tr><td> <em>Response:</em> <p>the error messages have been handled by using flash messages<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> Feature: Users will be able to see their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236392318-eafcfae0-b896-4eb8-8a41-0c540b8a7641.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the user profile for my admin account (mw3961)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/44">https://github.com/Ediexo/IT202-008/pull/44</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Explain briefly how the process/code works (view only)</td></tr>
<tr><td> <em>Response:</em> <p>The users can view their profile once they have successfully logged in. The<br>profile displays the username and email for the current user, as well as<br>a UI for updating the profile and password.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> Feature: User will be able to edit their profile </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots of the User Profile page validation messages and success messages</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236392620-a87440ac-bb41-498d-adfa-18560970ba34.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>email updated to mw3963<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236392768-b9dca8c9-727e-4614-8437-a68506f0ec6c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>username changed to mw393<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236392992-f8ea43f3-de58-4c81-a087-935b9e7d4be4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>updated password<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236393102-d8965807-02a5-40d6-9e4c-805af2099e3c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>password mismatch<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236393262-0d0a2904-ed3a-4ba3-a21a-2dffee9c20c0.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the result when the username is set to mw3962<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add before and after screenshots of the Users table when a user edits their profile</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236393517-f1c5ef12-d6e0-4a48-a87f-1465fdc40cd5.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>before<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/236393887-044e4e99-0d2d-41e0-a51f-0dce040ef548.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>after<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add the related pull request(s) for this feature</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/31">https://github.com/Ediexo/IT202-008/pull/31</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain briefly how the process/code works (edit only)</td></tr>
<tr><td> <em>Response:</em> <p>the user has the ability to change their password by inputting their old<br><br>password and a new password twice. the database looks up the user by<br><br>their userID and checks if the old password matches the new one. If<br>it <br>does, it checks to see if the new passwords match before storing<br>it in <br>the database. the passwords are not stored as a string, but<br>are run through a hashing algorithm first.<br><br></p><br></td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Issues and Project Board </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/231020663-fc2b66a6-2917-480e-b1fd-4f3d119260cb.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the project board<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Include a direct link to your Project Board</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/users/Ediexo/projects/1">https://github.com/users/Ediexo/projects/1</a> </td></tr>
<tr><td> <em>Sub-Task 3: </em> Prod Application Link to Login Page</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mw396-prod.herokuapp.com/project/login.php">https://mw396-prod.herokuapp.com/project/login.php</a> </td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone1-deliverable/grade/mw396" target="_blank">Grading</a></td></tr></table>