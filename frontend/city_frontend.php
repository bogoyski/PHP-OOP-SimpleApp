<?php /** @var $data \Data\Cities\AllCitiesViewData */ ?>

<?php foreach ($data->getCities() as $city): ?>
    <h1><?=$city->getName();?></h1>
<?php endforeach; ?>
