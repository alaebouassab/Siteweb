<template>
    <div>
       
        <!-- <div class="signin">
            <a class="d-inline-block" @click="isloginactive = !isloginactive">
                Login
            </a>
            <router-link to="/register">inscrire</router-link>
        </div> 

        <template v-if="isloginactive">
            <login @close="isloginactive = false" />
        </template> -->
      
        <div class="vol23">
             <h1 class="h1">NFT'S NEWS</h1>
            <div class="methode">
                <div class="vertical-menu">
                    <h3 style="text-align: center">Filter par:</h3>
                    <a href="#" @click.prevent="" class="active"> Network</a>
                    <a href="#" @click.prevent="clearFilter()">all</a>
                    <a
                        @click="filter(network)"
                        href="#"
                        v-for="(network, index) in networks"
                        :key="index"
                        >{{ network }}</a
                    >

                    <a href="#" class="active"> Date</a>
                    <input type="date" />
                    <h3 style="text-align: center">Trier par:</h3>
                    <a href="#" @click.prevent="orderBySupply()">Supply</a>
                    <a href="#" @click.prevent="orderByPrice()">Price number</a>
                </div>
            </div>

            <div class="projets">
                <!-- <form class="example">
                    <input
                        type="text"
                        placeholder="Search.."
                        name="search"
                        v-model="search"
                    />
                    <button type="submit" @click.prevent.stop="searchFilter()">
                        <i class="fa fa-search"></i>
                    </button>
                </form> -->

                <br /><br /><br />

                <div class="vole2">
                    <div class="a-1" bordr="1">
                        <div
                            class="a-2"
                            v-for="(project, index) in filterProjects"
                            :key="index"
                        >
                            <img
                                :src="project.image"
                                width="200"
                                height="200"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer" style="text-align: center">
            <a
                href="https://upcomingnft.art/"
                class="links"
                title="go to another website"
                >upcomingnft</a
            >
            <a
                href="https://upcomingnft.art/"
                class="links"
                title="go to another website"
                >upcomingnft</a
            >
            <a
                href="https://upcomingnft.art/"
                class="links"
                title="go to another website"
                >upcomingnft</a
            >

            <h6 id="contact" style="color: white">TELE:0622235308</h6>
            <br /><br />
            <a
                href="https://www.facebook.com/Emirates/"
                title="go to page facebook"
                ><img
                    src="facebook.png"
                    class="rounded-circle"
                    style="
                        width: 20px;
                        height: 20px;
                        margin-right: 2px;
                        float: left;
                    "
            /></a>
            <a
                href="mailto:arzamyasmine@gmail.com"
                target="_blank"
                class="links"
                ><img
                    src="gmail.png"
                    class="rounded-circle"
                    title="go to our e-mail"
                    style="
                        width: 20px;
                        height: 20px;
                        margin-right: 2px;
                        float: left;
                    "
                />
            </a>
        </div>
    </div>
</template>

<script>

export default {
    name: "home",
    data() {
        return {
            search: "",
            // isloginactive: false,
            projects: [],
            filterProjects: [],

            networks: ["SOL", "ETH", "AVAX", "ADA", "MATIC", "BNB"],
        };
    },

    watch: {
        search(val) {
            if (val.length == 0) {
                this.loadProjects();
            }
        },
    },
    methods: {
        filter(key) {
            this.filterProjects = this.projects.filter(
                (project) => project.network === key
            );
        },

        clearFilter() {
            this.filterProjects = this.projects;
        },
        orderBySupply() {
            this.filterProjects = this.projects.sort(
                (project_a, project_b) => project_a.supply - project_b.supply
            );
        },
        orderByPrice() {
            this.filterProjects = this.projects.sort(
                (project_a, project_b) =>
                    project_a.price_number - project_b.price_number
            );
        },

        searchFilter() {
            if (this.search.length == 0) {
                alert("Please add search keyword");
                return;
            }

            axios
                .post("http://127.0.0.1:8001/api/projects/search", {
                    search: this.search,
                })
                .then((projects) => {
                    this.projects = projects.data;
                    this.filterProjects = this.projects;
                })
                .catch((err) => {
                    console.log(err);
                });
        },

        loadProjects() {
            axios
                .get("http://127.0.0.1:8001/api/projects/all")
                .then((projects) => {
                    this.projects = projects.data;
                    this.filterProjects = this.projects;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },

    // components: {
    //     login,
    // },

    created() {
        this.loadProjects();
    },
};
</script>

<style>
body {
    font-family: Arial;
}

* {
    box-sizing: border-box;
}

/* .signin {
    display: flex;
    justify-content: right;
    align-items: center;
    flex-direction: row;
    color: black;
    padding: 17px 30px;
    margin: -18px 0;
} */

.signin > a {
    margin-right: 10px;
    cursor: pointer;
    text-decoration: none;
}

form.example input[type="text"] {
    padding: 10px;
    font-size: 17px;
    
    float: left;
    width: 30%;
    margin-top:8px ;
    margin-left:200px ;
    background: #f1f1f1;
}

form.example button {
    float: left;
    width: 5%;
    height: 10%;
    padding: 10px;
    background: black;
    color: white;
    font-size: 17px;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
    background: #9f9a9a;
}

form.example::after {
    content: "";
    clear: both;
    display: table;
}

.button1 {
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

.h1 {
    background-color: rgb(189, 192, 230);
    text-align: center;
    color: black;
    text-align: center;
}

.vol23 {
     background-color: rgb(189, 192, 230);
    height: 900px;
    width: 100%;
    padding: 10px;
    display: table;
    clear: both;
    content: "";
}
.vole2 {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    flex-basis: 200px;
    justify-content: center;
    align-items: center;
}

.methode {
    float: left;
    height: auto;
    width: 25%;
    background-color: white;
    margin-top: 123px;
}

.projets {
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
    background-color: slategray;
    color: white;
}

.a-2 {
    border: 1px;
    float: left;
    background-color: white;
    margin-right: 5px;
    margin-bottom: 10px;
    margin-left: 5px;
    padding: 5px;
}
.footer {
    margin-top: 4px;
    padding: 10px;
    height: 100px;
    background-color: #0b7dda;
}

.a-2 {
    background-color: #0b7dda;
}

th {
    background-color: rgb(136, 128, 224);
    color: #0e0d0d;
    width: 35%;
    height: 12%;
}

td {
    height: 12%;
    border: 1px solid #dddddd;
}
</style>
