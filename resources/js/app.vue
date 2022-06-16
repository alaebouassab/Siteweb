<template>
    <div>
        <div class="topnav">
             <a  style=" float: right; " class="d-inline-block" @click="isloginactive = !isloginactive">
                Login
            </a>
            <router-link to="/register" style=" float: right; ">inscrire</router-link>
            <router-link to="/"
                ><img
                    class="econ"
                    src="https://nftreminder.io/assets/images/home.png"
                    alt="Home"
                />Home</router-link>

            <router-link to="/RanckProject">RanckProject</router-link>
            <a href="#contact">Contact us</a>
             <form class="example">
                    <input
                        type="text"
                        placeholder="Search.."
                        name="search"
                        v-model="search"
                    />
                    <button type="submit" @click.prevent.stop="searchFilter()">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            
           

        <template v-if="isloginactive">
            <login @close="isloginactive = false" />
        </template>
        </div>
        <router-view></router-view>
    </div>
</template>
<script>
import login from "./components/login.vue";
export default {
    data() {
        return {
            user: null,
            isloginactive: false,
        };
    },
    components: { 
        login,
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
    padding: 10px;
    /* position: relative;
    top: 160px; */
}
/* .econ {
    padding: 5px;
} */

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
