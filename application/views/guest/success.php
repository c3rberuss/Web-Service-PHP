<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>

</ul>

    <?php if($item == 'file_name'){ ?>

        <img src="<?= base_url().'uploads/'.$value ?>" alt="">

    <?php } ?>

<?php endforeach; ?>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>
