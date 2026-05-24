<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обчислення через POST</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Обчислення через POST</h1>
    <form method="post">
      <label>c<input name="c" type="number"></label>
      <label>d<input name="d" type="number"></label>
      <button>Обчислити</button>
    </form>
    <?php if (isset($_POST['c'], $_POST['d'])): ?>
      <?php $c = (float)$_POST['c']; $d = (float)$_POST['d']; ?>
      <div class="result">
        Різниця: <?php echo $c - $d; ?><br>
        Частка: <?php echo $d != 0 ? $c / $d : "ділення на 0 неможливе"; ?>
      </div>
    <?php endif; ?>
  </main>
</body>
</html>
