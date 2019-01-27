<html>
  <head>
    <script src="myFunctions.js"></script>
    <script src="contactForm.js"></script>
    <link rel="stylesheet" type="text/css" href="all.css">
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  </head>

<body>
<button class="tablink" onclick="openPage('All', this, 'tomato')" id="defaultOpen">All</button>
<button class="tablink" onclick="openPage('Quiz', this, 'green')" >Quiz</button>
<button class="tablink" onclick="openPage('Ingredients', this, 'steelblue')">Ingredients</button>
<button class="tablink" onclick="openPage('Lessons', this, 'FFB6C1')">Cooking Lessons in Maine</button>
<button class="tablink" onclick="openPage('Contribute', this, 'orange')">Contribute/Contact</button>
</body>

<div id="All" class="tabcontent">
  <h3>Recipe Categories</h3>
   <div>
      <button id="pie" onclick="openCat(id)">Pie</button>
      <button id="pasta" onclick="openCat(id)">Pasta</button>
      <button id="sandwiches" onclick="openCat(id)">Sandwiches</button>
    </div>
</div>

 <div id="Quiz" class="tabcontent">
  <h3>Quiz</h3>
</div>

<div id="Ingredients" class="tabcontent">
  <h3>Ingredient Search</h3>
</div>

<div id="Lessons" class="tabcontent">
  <h3>Cooking Lessons in Maine</h3>
<!---10 cooking lessons in Maine--->
  <h3><a href="https://www.theblacktieco.com/about-us/cooking-classes">The Black Tie Company, Portland, Maine</a></h3>
  <p>Black Tie Cooks offers hands-on and demonstration cooking classes in a professional kitchen, taught by our talented chefs, bakers and guest teachers. The classes range from South American cuisine to New Orleans favorites, pasta making and Thai soup, noodles and tea. Classes are intimate and have a maximum of 12 and a minimum of 6 students, typically 6:00pm to 9:00pm at The Portland Club, Portland, ME.</p>
  <img src="https://www.theblacktieco.com/sites/default/files/cooking-class.jpg" alt="Black Tie Company" style="width:400px;height:300px;">
  <h3><a href="http://parsonagehouse.com/classes.html">Parsonage House, Vassalboro, Maine</a></h3>
  <p>Culinary Bootcamp Cooking School offers "a wide range of classes such as French, Mexican, Greek, Italian, Low Fat, Vegetarian, Indian, Southern Comfort, Company Dinners and Holiday Entertaining to name a few."</p>
  <img src="http://parsonagehouse.com/Parsonage%20House%20Image.jpg" alt="Parsonage House" style="width:400px;height:300px;">
  <h3><a href="https://www.mainefoodietours.com/culinary-classes/">Maine Foodie Tours, Portland, Maine</a></h3>
  <p>Celebrate a special event or occasion with a group of friends or coworkers Maine Foodie Tours style. Let one of our culinary experts create a menu based on fresh local fare and walk you through the steps of slicing, dicing and cooking each course. Currently, our Culinary Classes are only being offered as Private Events and are open to most ages. </p>
  <h3><a href="https://www.saltwaterfarm.com">Salt Water Farm</a></h3>
  <p>Salt Water Farm is a Cooking School for home cooks of all levels. We believe in traditional cooking methods and resourcefulness in the kitchen. We are advocates for our community’s farmers, fisherman and craftsmen. Our cooking classes and workshops help you to prepare simple, nourishing meals using ingredients from our gardens and the surrounding land and sea.</p>
  <h3><a href="http://www.measuringupcookingforkids.com">Measuring up Cooking for Kids, Scarborough, Maine</a></h3>
  <p>Measuring Up! - Cooking for Kids provides a unique hands on interactive cooking experience focused on introducing children ages 3-17 to the joys of cooking, the basics of nutrition and the accomplishment of creation. </p>
  <h3><a href="http://www.ambrosiacookingschool.com"> Ambrosia Cooking School, Bar Harbor, Maine</a></h3>
  <p>Sharon Joyce is a trainer/educator/chef and studied in Advanced French Cooking and French Pastry at Le Cordon Bleu in Paris. In 1981 she  opened and operated a catering business and cooking school in Chicago and the Virgin Islands. She has taught various cooking classes including French, International, Regional  American and Cruzan in such locations as Chicago, Bar Harbor, California, and Christiansted, St. Croix, U.S.V.I. She was fascinated by Maine cooking and the abundance of  local foods when she moved to Bar Harbor over 30 years ago. The historic cooking of  Maine  brings together history and the availability of foods.</p>
  <h3><a href="http://www.jillyannas.com"> Jillyannas Cooking School, Kennebunkport, ME</a></h3>
  <p>They offer intimate, hands-on classes as well as private parties. Time will be spent prepping, cooking, dining, sharing recipes, & enjoying each other's company.</p>
  <h3><a href="http://www.hartstoneinn.com/cooking-school/"> Hartstone Inn, Camden, Maine </a></h3>
  <p>Camden Maine cooking classes, Chef for A Day program, private cooking classes, and Chef Michael's Foodie Adventures are available!</p>
  <h3><a href="http://www.stoneturtlebaking.com"> Stone Turtle Baking and Cooking School, Lyman, Maine </a></h3>
  <p>Come see for yourself and enjoy life!</a></h3>
</div>

<div id="Contribute" class="tabcontent">
  <h3>Contribute/Contact</h3>

  <div class="container">
  <form id = "contact" action="" method="POST">
    <label for="name">Name</label>
    <fieldset>
    <input type="text" id="name" name="name" required="true" placeholder="Your name.." class="input-field" />

    <label for="email">Email</label>
    <input type="text" id="email" name="email" required="true" placeholder="Your email.." class="input-field" />

    <label for="category">Category</label>
    <select id="category" name="category">
      <option value="contribution">Recipe contribution</option>
      <option value="comments">Other comments</option>
    </select>

    <label for="message">Comment/Contribution</label>
    <textarea id="message" name="message" placeholder="Please contribute a recipe, or write down any questions and comments. Thank you for your contribution!" style="height:200px" required="true"></textarea>

    <input id="submit_btn" class="btn btn-submit" type="submit" value="Submit" >

    </form>
  </div>
</div>

<script>
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</html>
