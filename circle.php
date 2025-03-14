<?php
// ドーナッツグラフを作成
// $cx, $cy: 中心点の座標
// $lr: 外側の円の半径
// $sr: 内側の円の半径
// $data: データの配列
//   $data[x]['value']: 値
//   $data[x]['color']: 色
//   $data[x]['caption']: キャプション
function create_donut_graph($cx, $cy, $lr, $sr, $data) {

  $lx = [];
  $ly = [];
  $sx = [];
  $sy = [];
  $sum = array_sum(array_column($data, 'value'));

  // それぞれの区間を作成する
  $pos = 0;
  for ($i = 0; $i < count($data); $i++) {
    $p1 = $pos;
    $pos += $data[$i]['value'];
    $p2 = $pos;
    
    $x1 = sin(pi() * 2 * $p1 / $sum);
    $y1 = -cos(pi() * 2 * $p1 / $sum);
    $x2 = sin(pi() * 2 * $p2 / $sum);
    $y2 = -cos(pi() * 2 * $p2 / $sum);

    $lx1 = $x1 * $lr + $cx;
    $ly1 = $y1 * $lr + $cy;
    $lx2 = $x2 * $lr + $cx;
    $ly2 = $y2 * $lr + $cy;
    $sx1 = $x1 * $sr + $cx;
    $sy1 = $y1 * $sr + $cy;
    $sx2 = $x2 * $sr + $cx;
    $sy2 = $y2 * $sr + $cy;

    $large = ($sum / $data[$i]['value']) > 2 ? 0 : 1;
?><path fill="<?= $data[$i]['color'] ?>"
d="<?= "M {$sx1},{$sy1}
L {$lx1},{$ly1} A $lr $lr 0 $large 1 {$lx2} {$ly2}
L {$sx2},{$sy2} A $sr $sr 0 $large 0 {$sx1} {$sy1}" ?>" />
<?php
  }

  $pos = 0;
  for ($i = 0; $i < count($data); $i++) {
    $p1 = $pos;
    $pos += $data[$i]['value'];
    $p2 = $pos;

    $x = sin(pi() * ($p1 + $p2) / $sum);
    $y = -cos(pi() * ($p1 + $p2) / $sum);
    $x1 = $x * ($lr + $sr) / 2 + $cx;
    $y1 = $y * ($lr + $sr) / 2 + $cy;

    ?><text x="<?= $x1 ?>" y="<?= $y1 ?>" text-anchor="middle" dominant-baseline="middle"><?= htmlspecialchars($data[$i]['caption']) ?></text><?php
  }
}
?>