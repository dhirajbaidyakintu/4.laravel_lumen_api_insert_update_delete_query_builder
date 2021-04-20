<?php

$router->post('/insert', 'LaravelInsertUpdateDelete@Insert');
$router->put('/update', 'LaravelInsertUpdateDelete@Update');
$router->delete('/delete', 'LaravelInsertUpdateDelete@Delete');
