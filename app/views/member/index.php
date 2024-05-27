<div class="container" mt-5>

<div class="row">
    <div class="col-6">
        <h3>Members</h3>
        <?php foreach ($data['member'] as $member): ?>
<ul>
    <li> <?= $member['name'];?></li>
    <li> <?= $member['address'];?></li>
    <li> <?= $member['phone'];?></li>
    <li> <?= $member['position'];?></li>
</ul>
        <?php endforeach;?>
    </div>
</div>
</div>