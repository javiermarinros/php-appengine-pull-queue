<?php
/**
 * Copyright 2016 Tom Walder
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Tests for Queue class
 *
 * @author Tom Walder <tom@docnet.nu>
 */
class QueueTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Can we create a Task?
     */
    public function testExists()
    {
        $str_name = 'test-name';
        $obj_queue = new \AEQ\Pull\Queue($str_name);
        $this->assertEquals($str_name, $obj_queue->getName());
    }
}