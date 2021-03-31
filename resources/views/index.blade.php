<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
  <div id="app">
      <ul>
             <vue-select :options="[5,10,15,20,25,30,35,40,45,50,60]" v-model='randevu_sure'></vue-select>
            <button @click="selam()">wwww</button>
      </ul>
  </div>

</body>
        <script>
            var vue = new Vue({
                el: '#app',
                data: {
                    randevu_sure:0,
                },
                methods: {
                    selam(){
                        alert("selam");
                    }

                },

            })
        </script>

</html>
