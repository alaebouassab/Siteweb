<template>
    <section class="login-title">
    <form class="modal-content animate"  method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container">
      <label for="uname"><b>Nom:</b></label>
      <input type="text" placeholder="Entrer votre nom" name="uname" required>

      <label for="psw"><b>Mot de passe:</b></label>
      <input type="password" placeholder="Entrer votre mot de pass" name="psw" required>
        
      <button class="button" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    
  </form>
    </section>
</template>

<script>
export default {
    data() {
        return {};
    },
    props: {
        
    },
    name: 'login'
   

};
</script>

<style>

section{
  position:relative;
  top:150px;
}
.login-title {
    color: rgb(3, 0, 10);
}

input[type=text], input[type=password] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        .button {
          background-color: rgb(7, 86, 23);
          color: black;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
          float: right;
        }
        
        button:hover {
          opacity: 0.8;
        }
        
        span.psw {
          float: right;
          padding-top: 16px;
        }

        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 80%; /* Could be more or less, depending on screen size */
          height: 80%;
        }
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        } 
</style>
