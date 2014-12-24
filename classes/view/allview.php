<?php namespace Classes\View; //header('Content-Type: text/html; charset=utf-8'); ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta type="text/html" charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="../view/style.css" >
</head>

<body>

<header class="container">
    <div class="backgr">
        <table>
            <?php foreach ($this->items as $el):
                // foreach($el as $sub):
                ?>
                <tr>
                    <td> <?php //echo $sub; endforeach ?> </td>
                    <td> <?php echo $el; ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</header>

</body>
</html>

