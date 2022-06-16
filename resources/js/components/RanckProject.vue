<template>
    <div>
        <div>
            <h1 class="h1">NFT'S NEWS</h1>
        </div>

        <div class="vol23">
            <!--volet2-->
            <div class="methode">
                <div class="vertical-menu">
                    <h3 style="text-align: center">Filter par:</h3>
                    <button class="accordion">background</button>
                    <div class="panel">
                        <a href="#">blue</a>
                        <a href="#">black</a>
                        <a href="#">white</a>
                        <a href="#">green</a>
                        <a href="#">yellow</a>
                    </div>

                    <button class="accordion">hair</button>
                    <div class="panel">
                        <a href="#">long</a>
                        <a href="#">short</a>
                        <a href="#">white</a>
                    </div>

                    <button class="accordion">head</button>
                    <div class="panel">
                        <a href="#">11</a>
                        <a href="#">22</a>
                        <a href="#">33</a>
                    </div>
                </div>
            </div>

            <div class="projets">
                <br /><br /><br /><br /><br /><br /><br />

                <div class="vole2">
                    <div class="a-1" bordr="1">
                        <div
                            class="a-2"
                            v-for="(nft, index) in nftsFilter"
                            :key="index"
                        >
                            <router-link
                                :to="{
                                    name: 'showDetails',
                                    params: { nftId: +nft.id },
                                }"
                            >
                                <div class="a-4">
                                    <img
                                        :src="nft.image"
                                        width="150"
                                        height="150"
                                    />
                                    <button class="botona" type="button">
                                        Show more
                                    </button>
                                </div>
                            </router-link>
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
    name: "RanckProject",
    data() {
        return {
            nfts: [],
            nftsFilter: [],
        };
    },
    methods: {
        laodNfts() {
            axios
                .get("http://127.0.0.1:8001/api/nfts")
                .then((data) => {
                    this.nfts = data.data;
                    this.nftsFilter = this.nfts;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },

    created() {
        this.laodNfts();
    },
};
</script>

<style>
.a-4 {
    padding-top: 140px;
}
.botona {
    width: 100%;
}
</style>
