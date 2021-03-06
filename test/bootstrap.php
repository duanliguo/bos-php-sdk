<?php
/*
* Copyright (c) 2014 Baidu.com, Inc. All Rights Reserved
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
* the License. You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
* an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
* specific language governing permissions and limitations under the License.
*/

define('__BOS_CLIENT_ROOT', dirname(__DIR__));

// Only scalar and null values are allowed
define('__BOS_TEST_CONFIG', json_encode(array(
    'credentials' => array(
        'ak' => 'bb37e6dfffc948a59eb5ddd254263809',
        'sk' => '4377d181d7e94cab9ca289e670b9dae4',
    ),
    'connection_timeout_in_mills' => 5000,    // 5 seconds
    'endpoint' => 'http://10.26.208.32:8828',
    // 'endpoint' => 'http://localhost:8828',
)));


/* vim: set ts=4 sw=4 sts=4 tw=120: */
