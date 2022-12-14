<h1>Принятые сообщения</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Имя</th>
            <th scope="col">Почта</th>
            <th scope="col">Текст</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($cats as $cat) { ?>
            <tr>
            <th scope="row"><?= $cat['id']?></th>
            <td><?= $cat['name'] ?></td>
            <td><?= $cat['email'] ?></td>
            <td><?= $cat['text'] ?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>



























<!--<button class="btn btn-success" id="btn">Click me...</button>-->

<?php //$this->registerJsFile('@web/js/scripts.js',['depends' => 'yii\web\YiiAsset']) ?>
<?php //$this->registerJs("$('.container').append('<p>SHOW!!</p>');",\yii\web\View::POS_LOAD) ?>


<?php
//
//$js = <<<JS
//$('#btn').on('click', function (){
//    $.ajax({
//    url: 'index.php?r=post/index',
//    data: {test: '123'},
//    type: 'GET',
//    seccess: function (res){
//        console.log(res);
//    },
//    error: function (){
//        alert('error')
//    }
//    });
//})
//JS;
//$this->registerJs($js);
