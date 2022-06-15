<template>

<div> 
        <h1 class="h1"> NFT'S NEWS</h1>
        <button class="button1" @click="isloginactive=!isloginactive" >Login</button>
        <div>
        <router-link to="/register"><button class="button1" @click="isloginactive=!isloginactive">S'inscrire</button></router-link>
        </div>
        <login v-if="isloginactive" />
    <br><br><br><br>
    <!-- <div class="topnav">
        <a class="active" href="./">Home</a>
        <a href="./RanckProject">Ranck a project</a>
        <a href="#contact">Contact us</a>

    </div> -->

    <div class="vol23"> 
        <!--volet2-->
         <div class="methode">
            <div class="vertical-menu">
              <h3 style="text-align: center;">Filter par:</h3>
                <a href="#" class="active"> Network</a>
                <a href="#">all</a>
                <a href="#">Sol</a>
                <a href="#">Eth</a>
                <a href="#">Avax</a>
                <a href="#">ADA</a>
                <a href="#">Matic</a>
                <a href="#">BNB</a>
                <a href="#" class="active"> Date</a>
                <input type="date">
                <h3 style="text-align: center;">Trier par:</h3>
                <a href="#">Supply</a>
                <a href="#">Price number</a>
            </div>
         </div>

        <div class="projets">
            <form class="example" >
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
        
            <br><br><br>

            <div class="vole2">
                <div class="a-1" bordr="1" > 
                    <div class="a-2"><a href="" ><div><img src="" alt=""></div><ul style= "list-style-type: none"><li></li><li></li><li></li><li></li></ul></a></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                    <div class="a-2"></div> 
                    <div class="a-2"></div>
                    <div class="a-2"></div>
                
                
                </div>
            </div>
              
            
        </div>
        </div>

        
        <div class="footer" style="text-align: center;">
            <a href="https://upcomingnft.art/" class="links" title="go to another website">upcomingnft</a>
            <a href="https://upcomingnft.art/" class="links" title="go to another website">upcomingnft</a>
            <a href="https://upcomingnft.art/" class="links" title="go to another website">upcomingnft</a>
      
            <h6 id="contact" style="color: white;">TELE:0622235308</h6>
              <br><br>
            <a href="https://www.facebook.com/Emirates/" title="go to page facebook"><img src="facebook.png" class="rounded-circle" 
              style="width:20px;height:20px; margin-right: 2px;float: left;"></a>
              <a href="mailto:arzamyasmine@gmail.com" target="_blank" class="links" ><img src="gmail.png" class="rounded-circle"
                title="go to our e-mail"
                style="width:20px;height:20px; margin-right: 2px;float: left;">
              </a>
        </div> 

    
</div>
      
     
      
     
</template>

<script>
import login from "./login.vue";
export default{
    name:'home',
    data() {
      return {
        isloginactive:false
      }
  
    },
     components: {
        login,
    },
}
</script>


<style>

body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}



.button1{

  background-color: blanchedalmond;
  color: black;
  padding: 17px 30px;
  margin: -18px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  float: right;
}

button:hover {
  opacity: 0.8;
}

.h1{
  text-align: center  ;
  color: black;
  text-align: center;
  
}






.vol23{
    background-color: grey;
    height: 900px;
    width: 100%;
    padding: 10px;
    display: table;
    clear: both;
    content: "";

}

.methode{
    float: left;
    height: auto;
    width: 25%;
    background-color: white;
    margin-top: 123px;
    
}

.projets{
  float: left;
  height: 100%;
  width: 75%;
  padding-left: 2%;

}


.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color:slategray;
  color: white;
}



.a-2{
  border:1px;
  float:left;
  width : 20%;

  height:200px;
  background-color: white;
  margin-right: 5px;
  margin-bottom: 10px;
  margin-left: 5px;
  padding: 5px
}
.footer{

  margin-top: 4px;
  padding: 10px;
  height: 100px;
  background-color: #0b7dda;
}

.a-2{ 
  background-color: #0b7dda;
}

th{
 background-color: rgb(136, 128, 224);
 color: #0e0d0d;
 width: 35%;
 height: 12%;
}

td{
 height: 12%;
 border: 1px solid #dddddd;
} 

</style>