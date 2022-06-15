<template>
<div>
    <div>
        <h1 class="h1"> NFT'S NEWS</h1>
    </div>
    <!-- <div class="topnav">
        <a href="./welcome">Home</a>
        <a href="./page2">Ranck a project</a>
        <a class="active" href="./page3">more information</a>
        <a href="#contact">Contact us</a>


    </div> -->
     <div class="vol45">
        <div class="vol4">
            <div class="grandimage">

            </div>
        </div>
        <div class="vol5">

         <h1>attribute</h1>
            <table>
            <tr>
                <th>backgound</th>
                <td>....</td>
                <td>....</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>....</td>
                <td>....</td>
            </tr>
            <tr>
                <th>Clothing</th>
                <td>....</td>
                <td>....</td>
            </tr>
            <tr>
                <th>Face</th>
                <td>....</td>
                <td>....</td>
            </tr>
            <tr>
                <th>Hat</th>
                <td>....</td>
                <td>....</td>
            </tr>
            <tr>
              <th>Attribute</th>
              <td colspan="2">....</td>
          </tr>
            </table>

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
export default {
    name: 'show'
}
</script>

<style>

  .vol4{
    float: left;
    height: 50%;
    width: 35%;
    background-color: rgb(136, 128, 224);
    margin-top : 12%
  }
  
  .vol5{
  margin-top: 100px;  
  float: left;
  height: 100%;
  width: 65%;
  padding-left: 2%;
 ;
  
  
  }
  .vol45{
    display: table;
    clear: both;
    content: "";
    background-color: grey;
    height: 900px;
    width: 100%;
    /* padding: 10px; */
    
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

  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  height: 50%;
  margin-top: 12px;
  margin-left: auto;
  margin-right: auto;
  background-color: rgba(252, 252, 252, 0.914);
  width:70%;
  
  
  }
</style>