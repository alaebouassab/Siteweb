<template>
    <div>
        <div class="topnav">
         <router-link to="/"><img class="econ" src="https://nftreminder.io/assets/images/home.png" alt="Home">Home</router-link>
         <router-link to="/RanckProject">RanckProject</router-link>
         <a href="#contact">Contact us</a>
          <!-- <router-link to="/login">Login</router-link> -->
         <!-- <router-link to="/register">register</router-link> -->
         <!-- <router-link to="/show">more information</router-link> -->
        </div>
 
         <router-view></router-view>
    
         <!-- <router-link></router-link> -->
         <!-- <p v-if="user == null"><button>Login</button></p>
         <p v-if="user == null"><button>Register</button></p> -->
         <!-- <login/>
         <register/>
         <home/> -->
        
    </div>
</template>
<script>
// import home from "./components/home.vue";
// import login from "./components/login.vue";
// import register from "./components/register.vue";

export default {
    data() {
        return {
            message: "NFT Project",
            user: null,
        };
    },
    components: {
        // login,
        // register,
        // home
    },
    created() {
        this.getUser();
    },
    methods: {
        getUser() {
            axios
                .get("http://127.0.0.1:8001/api/user", {
                    headers: {
                        Authorization: `Bearer 3|pixJ7b2HqYnie3O0UjIEp4fUuvBkFFWFnRZzNZbJ`,
                    },
                })
                .then((data) => {
                    this.user = data.data;
                })
                .catch((err) => {
                    this.user = null;
                    console.log(err);
                });
        },
    },
};
</script>

<style>
.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
  top: 160px;

}
.econ{
    padding: 5;
}



.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: gray;
  color: white;
}
</style>
