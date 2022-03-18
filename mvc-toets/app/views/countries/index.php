<?php

foreach($data as $country)
{ ?>
    <div>
        <?= $country->id ?>
        <?= $country->name ?>
        <?= $country->capitalCity ?>
        <?= $country->continent ?>
        <?= $country->population ?>
    </div>
<?php
} ?>