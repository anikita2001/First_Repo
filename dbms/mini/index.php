<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- swipper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <title>Responsive Job Portal</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Nunito',sans-serif;
}

body{
    width: 100%;
    height: auto;
}

h1{
    line-height: 2.5;
}

.navbar {
    width: 100%;
    height: 70px;
    display: flex;
    justify-content: space-between;
    position: fixed;
    top: 0;
    left: 0;
    padding: 1rem 4.5rem;
    z-index: 10;
    color: white;
    background: black;
}

.navbar-logo a {
    letter-spacing: 2.5;
    font-size: xx-large;
    text-decoration: none;
    color: white;
}

.navbar-menu {
    width: 400px;
    padding-right: 500px;
    font-weight: bolder;
    display: flex;
    justify-content: space-between;
}

.navbar-menu a {
    color: white;
    padding: 20px;
    /* margin-right: 50px; */

    padding-top: 10px;
    font-size: large;
    text-decoration: none;
}

.navbar-menu a:hover{
    color: darkorange;
    text-transform: uppercase;
    transition: all 1s ease;
}

.menu-toggle {
    display: none;
}

.menu-toggle .bar {
    width: 15px;
    height: 2px;
    margin: 3px auto;
    transition: all 0.3 ease-in-out;
    background-color: white;
    cursor: pointer;
}

header {
    width: 100%; 
    height: 700px;
    background-image: url("30.png");
    background-position: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

header h1 {
    /* position: absolute;
    top: 7rem;
    left: 3rem;
    letter-spacing: 3;
    font-weight: bolder;
    font-size: 52px;
    color: white;
    text-shadow: 4px 2px 0px rgba(0, 0, 0, 0.2);  */
    color: white;
    line-height: 65px;
    font-family: 'Times New Roman';
    padding-top: 100px;
    padding-left: 50px;
    letter-spacing: 3;
    font-weight: bolder;
    font-size: 52px;
}

header span {
    color: rgb(73, 73, 237);
}

.search-wrapper {
    width: 60%;
    margin: auto;
    padding-top: 200px;
    min-width: 300px;
    height: 3.5rem;
    position: center;
}

.search-box{
    width: 100%;
    position: absolute;
    background-color: grey;
    box-shadow: rgba(2,11,20,0.2) 0px 5px 15px;
    top: -45%;
    height: 100%;
    width: 100%;
}

.search-card {
    display: flex;
    justify-content: space-between;
    height: 100%;
    padding: 0.5rem;
}

.search-input {
    height: 100%;
    width: 100%;
    border: none;
    padding: 0.5rem;
}

.search-button{
    width: 200px;
    background: blue;
    border: none;
    color: white;
    cursor: pointer;
}

.filter-box{
    width: 100%;
    height: auto;
    font-size: 0.8rem;
    width: 60px;
    min-width: 1250px; 
    padding-left: 300px;
    margin: 2px;
}

.filter-dropdown{
    width: 100%;
    border-bottom: 1px solid red;
    display: flex;
    justify-content: flex-start; 
    /* flex-wrap: wrap; */
    gap: 2rem;
}

.filter-select{
    border: none;
    font-size: x-large;
    padding: 0.6rem;
}

.filter-select:hover {
    background: lightgrey;
}

.filter-choosen {
    width: 100%;
    padding-left: 10rem;
    padding-top: 1rem;
    /* padding: 0.3rem 0; */
    display: flex;
 /* flex-wrap: wrap; */
    gap: 3rem;
}

.chosen-card {
    background: blue;
    padding: 0.2rem 0.5rem;
    font-size: large;
    border-radius: 20px;
    color: white;
    cursor: pointer;
}

.job-list {
    margin: 5%;
    padding: 1rem;
    background-color: lightgrey;
}
.job-card {
    display: flex;
    justify-content: space-between;
    padding: 1rem;
    margin: 1rem;
    min-height: 100px;
    align-items: center;
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    cursor: pointer;
}
.job-card :hover {
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.job-name {
    display: flex;
}
.job-profile {
    width: 60px;
    height: 60px;
    margin: 00.5rem;
}
.job-detail {
    padding: 0 10px;
}
.job-detail h4 {
    color: blue;
    font-weight: bolder;
    font-size: 1.3rem;
}
.job-detail p {
    display: -webkit-box;
    overflow: hidden;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.job-label {
    padding: 1rem;
    display: flex;
    flex-wrap: wrap;
}
.job-label a {
    padding: 0.4rem;
    margin: 0.4rem;
    color: white;
    text-decoration: none;
    border-radius: 20px;
    font-size: 0.8rem;
}
.label-a {
    background-color: orange;
    font-weight: bold;
}
.label-b {
    background-color: blue;
    font-weight: bold;
}
.label-c {
    background-color: orangered;
    font-weight: bold;
}
.job-posted {
    font-size: 00.8rem;
}
 .job-more {
    padding: 0.3rem 2rem;
    margin: 20px auto;
    width: 250px;
    /* background-color: white;
    color: blue;
    font-weight: bolder;
    text-align: center;
    text-decoration: none;
    border: 3px solid blue;
    border-radius: 20px;
    cursor: pointer; */
}
.job-more a{
    display: block;
    background-color: white;
    color: blue;
    font-weight: bolder;
    text-align: center;
    text-decoration: none;
    border: 3px solid blue;
    border-radius: 20px;
    cursor: pointer;
    /* text-decoration: none;
    color: aqua; */
}
.job-more a:hover{
    background-color: blue;
    color: white;
    transition: all 1s ease;
}

.join {
    width: 100%;
    height: 350px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 1rem 3rem;
    align-items: center;
    position: relative;
    background: linear-gradient(180deg,rgba(0,85,177,0.6)0%, rgba(144, 187, 236, 0.1)100%);
    z-index: 1;
}
/* .join ::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(180deg,rgba(0,85,177,0.6)0%, rgba(144, 187, 236, 0.1)100%);
    z-index: 1;   
} */
.join-detail{
    min-width: 280px;
    width: 50%;
    z-index: 2;
    margin-bottom: 1rem;
}
.join-detail h1 {
    font-size: 36px;
    letter-spacing: 2;
}
/* .join-button {
    width: 200px;
    padding: 1rem;
    border: none;
    color: black;
    background-color: yellow;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    z-index: 2; 
    cursor: pointer;
}
.join-button:hover {
    background: transparent;
    border: 2px solid yellow;
    color: yellow;
    
} */
.join-button {
    padding: 0.3rem 2rem;
    margin: 20px auto;
    width: 300px;
    font-size: 25px;
}
.join-button a{
    display: block;
    background-color: white;
    color: blue;
    font-weight: bolder;
    text-align: center;
    text-decoration: none;
    border: 3px solid blue;
    border-radius: 2px;
    cursor: pointer;
}
.join-button a:hover{
    background-color: blue;
    color: white;
    transition: all 1s ease;
}

.featured{
    width: 100%;
    height: auto;
    text-align: center;
    padding: 5rem 1rem;
    background-color: grey;
}
.section-tittle{
    margin-bottom: 0.5rem;
    letter-spacing: 1.5;
    /* text-align: center; */
    font-size: 36px;
}
/* .section-tittle h1  {
    text-align: center;
} */
.featured-wrapper{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px,1fr));
    gap: 2rem;
    align-items: center;
    width: 100%;
    padding-top: 50px;
    padding-left: 250px;
    padding-right: 250px;
    /* padding-bottom: 50px; */
    padding: 2% 17%;
}
.featured-wrapper :hover {
    box-shadow: rgba(100, 100, 111, 0.8) 0px 7px 29px 0px;
}
.featured-card{
    display: flex;
    flex-direction: column;
    /* font-size: large;
    font-weight: bolder; */
    align-items: center;
    padding: 1rem;
    background-color: white;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px ;
}
.featured-card p {
    font-size: x-large;
    font-weight: bolder;
}
.featured-card :hover {
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.featured-image{
    height: 80px;
    margin-bottom: 0.5rem;
}
.featured-image h1 {
    /* padding-left: 50px; */
    text-align: center;
}
.featured-image p {
    padding-left: 200px;
    padding-right: 200px;
    text-align: justify;
}
.featured-button {
    /* border: 1px solid blue;
    background-color: transparent; */
    margin-top: 0.5rem;
    padding: 3px 10px;
    /* cursor: pointer;
    color: blue; */
}
.featured-button a {
    padding: 3px;
    display: block;
    background-color: transparent;
    color: blue;
    /* font-weight: lighter; */
    text-align: center;
    text-decoration: none;
    border: 1px solid blue;
    border-radius: 2px;
    cursor: pointer;
}

.featured-button a:hover {
    background-color: blue;
    color: white;
    font-weight: bold;
    text-decoration: underline;
    transition: all 1s ease;
}

.testimoni {
    width: 100%;
    text-align: center;
    padding: 5rem 1rem;
    background-color: blue;
    color: white;
    margin: 530px 0px;
}
.swiper {
    width: 80%;
    height: 400px;
    margin-top: 2rem;
}
</style>
<body>
    <nav class="navbar"><a href="#">Register</a>
        <h2 class="navbar-logo"><a href="#">Welcome</a></h2>
        <div class="navbar-menu">
            <a href="#student login">STUDENT LOGIN</a>
            <a href="#hod login">HOD LOGIN</a>
            <a href="#placement login">PLACEMENT LOGIN</a>
            <a href="#administrative">ADMINISTRATIVE LOGIN</a>
            <!--  -->
        </div>
        <div class="menu-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    
    <!-- header -->
    <header>
        <h1 class="header-title">
            FIND YOUR <br> <span>PERFECT JOB</span> <br> EASILY
        </h1>
        <!-- <div class="search-wrapper"> -->
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button">Button</button>
  <!-- <button class="btn btn-primary" type="button">Button</button> -->
</div>
        <!-- <div class="search-box">
            <div class="search-card">
                <input class="search-input" type="text" placeholder="job tittle or keywords">
                <button class="search-button">CURRENT DRIVES</button>
            </div>
        </div> -->
    </div>

    </header>
        
    <!-- filter box -->
    <div class="filter-box">
        <div class="filter-dropdown">
            <select class="filter-select" id="job-level" name="job-level">
                <option>Job-level</option>
                <option>Entry</option>
                <option>Mid-Senior</option>
                <option>Director</option>
            </select>
            <select class="filter-select" id="job-function" name="job-function">
                <option>Job Function</option>
                <option>IT</option>
                <option>Management</option>
                <option>Education</option>
            </select>
            <select class="filter-select" id="employment" name="employment">
                <option>Employment Type</option>
                <option>Internship</option>
                <option>Part Time</option>
                <option>Full Time</option>
            </select>
            <select class="filter-select" id="location" name="location">
                <option>Locations</option>
                <option>Remote</option>
                <option>US</option>
                <option>UK</option>
            </select>
            <select class="filter-select" id="Education" name="Education">
                <option>Education</option>
                <option>High School</option>
                <option>Bachelor's degree</option>
                <option>Master's degree</option>
            </select>    
        </div>
        <div class="filter-choosen">
            <div class="chosen-card">
                Remote <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Full time <i class="fas fa-times-circle"></i>
            </div>
            <div class="chosen-card">
                Financial Tech <i class="fas fa-times-circle"></i>
            </div><div class="chosen-card">
                Entry Level <i class="fas fa-times-circle"></i>
            </div>
        </div>
    </div>


    <!-- job Listing -->
    <section class="job-list" id="student login">
        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="20.jpg" alt=" ">
                <div class="job-detail">
                    <h4>Tesla</h4>
                    <h3>Mechanical Engineering</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">CSS</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted 2 mins ago
            </div>
        </div>

        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="21.jpg">
                <div class="job-detail">
                    <h4>Ebay</h4>
                    <h3>Business Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">CSS</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted 2 mins ago
            </div>
        </div>
        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="26.jpg">
                <div class="job-detail">
                    <h4>Tiktok</h4>
                    <h3>Digital Marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">CSS</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted 2 mins ago
            </div>
        </div>
        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="23.jpg">
                <div class="job-detail">
                    <h4>Youtube</h4>
                    <h3>UI UX Desiner</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">CSS</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted an hour ago
            </div>
        </div>
        <div class="job-card">
            <div class="job-name">
                <img class="job-profile" src="24.jpg">
                <div class="job-detail">
                    <h4>Amazon</h4>
                    <h3>Software Engineering</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="job-label">
                <a class="label-a" href="#">HTML</a>
                <a class="label-b" href="#">CSS</a>
                <a class="label-c" href="#">Javascript</a>
            </div>
            <div class="job-posted">
                Posted an hour ago
            </div>
        </div>
        <!-- <button class="job-more">More Listing</button> -->
        <div class="job-more">
            <a href="#">More List</a>
        </div>
    </section>

    <!-- join -->
    <section class="join">
        <div class="join-detail">
            <h1 class="section-title">LETS START YOUR NEW JOB WITH US</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod aperiam vitae, nemo cum perferendis nam! Ratione iusto error quaerat architecto.</p>
        </div>
        <div class="join-button">
            <a href="#">Join Now</a>
        </div>
        <!-- <button class="join-button">Join Now</button> -->
    </section>

    <!-- featured company -->
    <section class="featured-image" id="HOD LOGIN">
        <h1 class="section-tittle">Featured HOD LOGIN</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, ipsa tenetur quae, excepturi quod id repudiandae commodi atque aut facilis laudantium aperiam rem ipsam laborum sit consequatur odio nam sapiente?</p>
        <div class="featured-wrapper" >
            <div class="featured-card">
                <img class="featured-image" src="21.jpg">
                <p>Ebay</p>
                <!-- <button class="featured-button">View 2 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 2 student login</a>
                </div>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="23.jpg">
                <p>Youtube</p>
                <!-- <button class="featured-button">View 1 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 1 student login</a>
                </div>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="26.jpg">
                <p>Tiktok</p>
                <!-- <button class="featured-button">View 3 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 3 student login</a>
                </div>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="20.jpg">
                <p>Tesla</p>
                <!-- <button class="featured-button">View 2 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 2 student login</a>
                </div>
            </div>
            <!-- <br> -->
            <div class="featured-card">
                <img class="featured-image" src="27.jpg">
                <p>Google</p>
                <!-- <button class="featured-button">View 2 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 2 student login</a>
                </div>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="28.jpg">
                <p>Facebook</p>
                <!-- <button class="featured-button">View 4 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 4 student login</a>
                </div>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="29.jpg">
                <p>Apple</p>
                <!-- <button class="featured-button">View 1 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 1 student login</a>
                </div>
            </div>
            <div class="featured-card">
                <img class="featured-image" src="24.jpg">
                <p>Amazon</p>
                <!-- <button class="featured-button">View 2 student login</button> -->
                <div class="featured-button">
                    <a href="#">View 2 student login</a>
                </div>
            </div>
        </div>
    </section>


    

</body>
</html>