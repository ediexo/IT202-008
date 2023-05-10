<table><tr><td> <em>Assignment: </em> IT202 Milestone 2 Shop Project</td></tr>
<tr><td> <em>Student: </em> Edie Westrich (mw396)</td></tr>
<tr><td> <em>Generated: </em> 5/10/2023 7:21:59 PM</td></tr>
<tr><td> <em>Grading Link: </em> <a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/mw396" target="_blank">Grading</a></td></tr></table>
<table><tr><td> <em>Instructions: </em> <ol><li>Checkout Milestone2 branch</li><li>Create a new markdown file called milestone2.md</li><li>git add/commit/push immediate</li><li>Fill in the below deliverables</li><li>At the end copy the markdown and paste it into milestone2.md</li><li>Add/commit/push the changes to Milestone2</li><li>PR Milestone2 to dev and verify</li><li>PR dev to prod and verify</li><li>Checkout dev locally and pull changes to get ready for Milestone 3</li><li>Submit the direct link to this new milestone2.md file from your GitHub prod branch to Canvas</li></ol><p>Note: Ensure all images appear properly on github and everywhere else. Images are only accepted from dev or prod, not local host. All website links must be from prod (you can assume/infer this by getting your dev URL and changing dev to prod).</p></td></tr></table>
<table><tr><td> <em>Deliverable 1: </em> Users with admin or shop owner will be able to add products </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of admin create item page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237528195-a481c18f-e494-4dbb-ac5b-6cdc32d4f256.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The shop admin adding a new hat to the hat store with a<br>name, description, category, inventory, unit price (in cents), and an online image link<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add screenshot of populated Products table clearly showing the columns</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237528586-0093b0e1-cc19-496c-bc89-b7a493e1fba3.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The available hats in the Products table<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly describe the code flow for creating a Product</td></tr>
<tr><td> <em>Response:</em> <p>A product is created from the &quot;create_prod.php&quot; file, only accessible to shop owners<br>and admins. the information is submitted via a POST form that loops through<br>the inputted information and inserts it into the database with an INSERT query<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/55">https://github.com/Ediexo/IT202-008/pull/55</a> </td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mw396-prod.herokuapp.com/project/owner-admin/create_prod.php">https://mw396-prod.herokuapp.com/project/owner-admin/create_prod.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 2: </em> Any user can see visible products on the Shop Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the Shop page showing 10 items without filters/sorting applied</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237529583-26d9d1f3-39a8-46e7-b185-debc09a6ab33.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The view of the store while not logged in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the Shop page showing both filters and a different sorting applied (should be more than 1 sample product)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237529720-e5052823-fa82-4546-82b6-7897e7df252c.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The products when sorted by name<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237529829-eb86d165-88dc-47c9-b4ea-aa62d3811f59.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the products when sorted by price<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237530061-ffff8358-86dd-4c6e-b529-6e8ee4370d08.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Hats when the term &quot;fancy&quot; is asked<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the filter/sort logic from the code</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237530278-e6fde797-655f-46bd-953e-74ea27f8e6d6.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The filter/sort code<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Briefly explain how the results are shown and how the filters are applied</td></tr>
<tr><td> <em>Response:</em> <p>results can be shown in either ascending or descending order. Filters query the<br>necessary information from the database and display products based on order.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/56">https://github.com/Ediexo/IT202-008/pull/56</a> </td></tr>
<tr><td> <em>Sub-Task 6: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mw396-prod.herokuapp.com/project/shop.php">https://mw396-prod.herokuapp.com/project/shop.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 3: </em> Show Admin/Shop Owner Product List (this is not the Shop page and should show visibility status) </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Screenshot of the Admin List page/results</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237530657-072b5f24-d24a-4c94-b2cc-f24c74ca6d81.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The list products page for admins and owners<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Briefly explain how the results are shown</td></tr>
<tr><td> <em>Response:</em> <p>Results are shown in an HTML table where the items are listed by<br>their product ID. If a name is searched, the database is given the<br>&quot;like&quot; query to select all names similar to the input.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/57">https://github.com/Ediexo/IT202-008/pull/57</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mw396-prod.herokuapp.com/project/owner-admin/list_products.php">https://mw396-prod.herokuapp.com/project/owner-admin/list_products.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 4: </em> Admin/Shop Owner Edit button </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the edit button visible to the Admin on the Shop page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237531646-37e0b548-5ec4-4fcc-bfba-acc066f12bac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Showing the Admin ability to edit<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the edit button visible to the Admin on the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot showing the edit button visible to the Admin on the Admin Product List Page (The admin page)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237531646-37e0b548-5ec4-4fcc-bfba-acc066f12bac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>displaying the &quot;edit product button&quot;<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a before and after screenshot of Editing a Product via the Admin Edit Product Page</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237531646-37e0b548-5ec4-4fcc-bfba-acc066f12bac.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The before list of the items i the products list<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237531914-8e8d7cdd-f9b3-483e-b7b9-9d4f1a5b85a4.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The &quot;after&quot; of the edited product- Cowboy hats are now 50% off<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 5: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <div>I was unable to implement pagination due to a time conflict (see below).<br><br></div><div><br></div><div>The admin/owner status is checked by the logic before allowing editing, which accesses<br>the database through a form<br></div><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/57">https://github.com/Ediexo/IT202-008/pull/57</a> </td></tr>
<tr><td> <em>Sub-Task 7: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://mw396-prod.herokuapp.com/project/owner-admin/edit_products.php">https://mw396-prod.herokuapp.com/project/owner-admin/edit_products.php</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 5: </em> Product Details Page </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot showing the button (clickable item) that directs the user to the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot showing the result of the Product Details Page</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> (missing)</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain the code process/flow</td></tr>
<tr><td> <em>Response:</em> <p>I was unable to implement the product details page due to time constraints.<br>I&#39;ve been struggling with some personal issues this semester, as well as issues<br>receiving medication for ADHD. I understand that it is entirely my own responsibility<br>to keep track of time, but unfortunately I was unable to complete this.<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td>Not provided</td></tr>
<tr><td> <em>Sub-Task 5: </em> Add a direct link to heroku prod for this file (can be any specific item)</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 6: </em> Add to Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a screenshot of the success message of adding to cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237532334-1fcfe91c-c4f2-4617-bfc1-9f6c424acd62.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>shows the chef&#39;s hat and the cowboy hat in the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a screenshot of the error message of adding to cart (i.e., when not logged in)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237533215-708659f7-8a5f-4548-b0e5-cf5f73cdde3a.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The user is not allowed to access the cart unless they are logged<br>in<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add a screenshot of the Cart table with data in it</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237533108-b6a782e9-6bea-45b4-938c-25bcbe2fb2f8.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>The two items currently in the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Tell how your cart works (1 cart per user; multiple carts per user)</td></tr>
<tr><td> <em>Response:</em> <p>my cart works by having one cart per user, with a composite key<br>attribute for the two IDs of product ID and user ID<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Explain the process of add to cart</td></tr>
<tr><td> <em>Response:</em> <p>The cart is defined in the 007 sql file. the cart created a<br>new entry when the form is submitted and generates a new ID for<br>the cart via the form input<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 6: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/57/commits/de6a90bec5108010905e281019c56ffe5f2d3b15">https://github.com/Ediexo/IT202-008/pull/57/commits/de6a90bec5108010905e281019c56ffe5f2d3b15</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 7: </em> User will be able to see their Cart </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshot of the Cart View</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237532334-1fcfe91c-c4f2-4617-bfc1-9f6c424acd62.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>cart total does not add up, subtitle is off, and the pages are<br>off :(<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Explain how the cart is being shown from a code perspective along with the subtotal and total calculations</td></tr>
<tr><td> <em>Response:</em> <p>I struggled to get the subtotal and total calculations to work. I tried<br>writing my own echoing function (sePrint() in the safer_echo.php file) but it still<br>had issues<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 3: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/57/commits/de6a90bec5108010905e281019c56ffe5f2d3b15">https://github.com/Ediexo/IT202-008/pull/57/commits/de6a90bec5108010905e281019c56ffe5f2d3b15</a> </td></tr>
<tr><td> <em>Sub-Task 4: </em> Add a direct link to heroku prod for this file</td></tr>
<tr><td>Not provided</td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 8: </em> User can update cart quantity </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Show a before and after screenshot of Cart Quantity update</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237532140-fc9d781b-430d-466d-8d0d-e5e57aaf0f92.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>Updating quantity of hats<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237532334-1fcfe91c-c4f2-4617-bfc1-9f6c424acd62.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the initial number of hats added to the cart<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Show a before and after screenshot of setting Cart Quantity to 0</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237533888-92725e3d-3284-4969-a963-f73c640c44c7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the screen simply shows a flash message saying that the user cannot delete<br>this way<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Show how a negative quantity is handled</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237533888-92725e3d-3284-4969-a963-f73c640c44c7.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>I was unable to get this far - the form doesn&#39;t allow it<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 4: </em> Explain the update process including how a value of 0 and negatives are handled</td></tr>
<tr><td> <em>Response:</em> <p>i was unable to get far, so i just hard coded the block<br>in the form<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 5: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/57/commits/de6a90bec5108010905e281019c56ffe5f2d3b15">https://github.com/Ediexo/IT202-008/pull/57/commits/de6a90bec5108010905e281019c56ffe5f2d3b15</a> </td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/57">https://github.com/Ediexo/IT202-008/pull/57</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 9: </em> Cart Item Removal </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707834-bf5a5b13-ec36-4597-9741-aa830c195be2.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add a before and after screenshot of deleting a single item from the Cart</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237534104-3eff59ba-e0f9-446d-8c87-917d4e136ccd.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the cart with the birthday hat newly added<br></p>
</td></tr>
<tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237534148-d45abf6d-61e9-4533-8ec6-63677809a383.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>the cart with the party hat removed (and a new error)<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 2: </em> Add a before and after screenshot of clearing the cart</td></tr>
<tr><td><table><tr><td>Missing Image</td></tr>
<tr><td> <em>Caption:</em> <p>I was unable to get this far in the project<br></p>
</td></tr>
</table></td></tr>
<tr><td> <em>Sub-Task 3: </em> Briefly explain how each delete process works</td></tr>
<tr><td> <em>Response:</em> <p>The &quot;delete from cart&quot; button works by sending a DELETE statement for the<br>entry in the products table with the right product ID and user ID<br><br></p><br></td></tr>
<tr><td> <em>Sub-Task 4: </em> Add related pull request link(s)</td></tr>
<tr><td> <a rel="noreferrer noopener" target="_blank" href="https://github.com/Ediexo/IT202-008/pull/57">https://github.com/Ediexo/IT202-008/pull/57</a> </td></tr>
</table></td></tr>
<table><tr><td> <em>Deliverable 10: </em> Misc </td></tr><tr><td><em>Status: </em> <img width="100" height="20" src="https://user-images.githubusercontent.com/54863474/211707773-e6aef7cb-d5b2-4053-bbb1-b09fc609041e.png"></td></tr>
<tr><td><table><tr><td> <em>Sub-Task 1: </em> Add screenshots showing which issues are done/closed (project board) Incomplete Issues should not be closed (Milestone2 issues)</td></tr>
<tr><td><table><tr><td><img width="768px" src="https://user-images.githubusercontent.com/56133424/237534437-0a69b974-2de3-4acf-b9dc-50f9570bd311.png"/></td></tr>
<tr><td> <em>Caption:</em> <p>a poorly updated project board<br></p>
</td></tr>
</table></td></tr>
</table></td></tr>
<table><tr><td><em>Grading Link: </em><a rel="noreferrer noopener" href="https://learn.ethereallab.app/homework/IT202-008-S23/it202-milestone-2-shop-project/grade/mw396" target="_blank">Grading</a></td></tr></table>