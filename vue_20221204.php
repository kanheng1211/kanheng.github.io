<!doctype html>
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
<div id="app">
    <data-module></data-module>
    <h1>Hello, world!</h1>
    <h2>{{username}}, Again</h2>
    This is Username: <input v-model="username"></input>
    <p> 總金額共 {{ subtotal() }} 元 </p>
    <p> 總金額共 {{ price * quantity }} 元 </p>
    <p> 總金額共 {{ subtotalA }} 元 </p>
</div>
<div id="app2">
    <p>1日幣=0.262台幣</p>
    <div>台幣<input type="text" v-model="twd" v-on:input="twd2jpy"></div>
    <div>台幣<input type="text" v-model="twd"></div>
    台幣<input v-model="twd">
    日幣<input v-model="jpy">
</div>

<script type="text/javascript">
    const app2 = new Vue({
        data: {
            twd: 1,
        },
        computed: {
            jpy: {
                get () {
                    return Number.parseFloat(Number(this.twd)/0.262).toFixed(3);
                }
            }
        }
    }).$mount("#app2");

    const app = new Vue({
      data: {
        username: '',
        price: 10,
        quantity: 10,
        message : "Hello World!"
      },
      methods: {
      	subtotal: function() {
        	return this.price * this.quantity * 10;
        }
      },
      computed: {
      	subtotalA () {
        	return this.price * this.quantity * 100;
        }
      }
    }).$mount("#app");
</script>

</body>
</html>