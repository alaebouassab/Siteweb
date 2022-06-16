<template>
    <section class="login">
        <form class="modal-content animate" method="post">
            <div class="imgcontainer">
                <span class="close" @click="$emit('close')" title="Close Modal"
                    >&times;</span
                >
            </div>

            <div class="container">
                <label for="uname"><b>Nom:</b></label>
                <input
                    type="text"
                    placeholder="Entrer votre nom"
                    name="uname"
                    required
                />

                <label for="psw"><b>Mot de passe:</b></label>
                <input
                    type="password"
                    placeholder="Entrer votre mot de pass"
                    name="psw"
                    required
                />

                <button class="loginButton" type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember" />
                    Remember me
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
    props: {},
    name: "login",
};
</script>

<style>
.login {
    color: rgb(3, 0, 10);
    position: fixed;
    top: 50%;
    width: 70%;
    left: 50%;
    transform: translate(-50%, -50%);
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.loginButton {
    background-color: rgb(7, 86, 23);
    color: #fff;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    float: right;
}

.loginButton:hover {
    opacity: 0.8;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal-content {
    background-color: #fefefe;
    border: 1px solid #888;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 4px;
    top: -7px;
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
