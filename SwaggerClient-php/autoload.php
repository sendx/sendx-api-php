<?php

/**
 * SendX REST API
 *
 * SendX REST API has two methods:    * Identify   * Track      ## Identify API Method      Identify API Method is used to attach data to a visitor. If a contact is not yet created then we will create the contact. In case contact already exists then we update it.      **Example Request:**       ```json       {         email: \"john.doe@gmail.com\",           firstName: \"John\",         lastName: \"Doe\",         birthday: \"1989-03-03\",         customFields: {            \"Designation\": \"Software Engineer\",           \"Age\": \"27\",            \"Experience\": \"5\"         },           tags: [\"Developer\", \"API Team\"],        }   ```         Note that tags are an array of strings. In case they don't exist previously then API will create them and associate them with the contact.      Similarly if a custom field doesn't exist then it is first created and then associated with the contact along-with the corresponding value. In case custom field exists already then we simply update the value of it for the aforementioned contact.      We don't delete any of the properties based on identify call. What this means is that if for the same contact you did two API calls like:         **API Call A**        ```json       {         email: \"john.doe@gmail.com\",          firstName: \"John\",         birthday: \"1989-03-03\",         customFields: {            \"Designation\": \"Software Engineer\"         },           tags: [\"Developer\"],        }   ```         **API Call B**       ```json       {           email: \"john.doe@gmail.com\",           customFields: {            \"Age\": \"29\"         },           tags: [\"API Team\"],        }   ```         Then the final contact will have firstName as **John**, birthday as **1989-03-03** present. Also both tags **Developer** and **API Team** shall be present along with custom fields **Designation** and **Age**.         **Properties:**      * **firstName**: type string   * **lastName**: type string   * **email**: type string     * **company**: type string     * **birthday**: type string with format **YYYY-MM-DD** eg: 2016-11-21     * **customFields**: type map[string]string      * **tags**: type array of string          **Response:**       ```json       {           \"status\": \"200\",         \"message\": \"OK\",         \"data\": {           \"encryptedTeamId\": \"CLdh9Ig5GLIN1u8gTRvoja\",           \"encryptedId\": \"c9QF63nrBenCaAXe660byz\",           \"tags\": [             \"API Team\",             \"Tech\"           ],           \"firstName\": \"John\",           \"lastName\": \"Doe\",           \"email\": \"john.doe@gmail.com\",           \"company\": \"\",           \"birthday\": \"1989-03-03\",           \"customFields\": {             \"Age\": \"29\",             \"Designation\": \"Software Engineer\"           }           }        }     ```         ## Track API Method         Track API Method is used to associate **tags** with a contact. You can have automation rules based on tag addition and they will get executed. For eg:      * **On user registration** tag start onboarding drip for him / her.   * **Account Upgrade** tag start add user to paid user list and start account expansion drip.       **Response:**       ```json       {         \"status\": \"200\",         \"message\": \"OK\",         \"data\": \"success\"      }   ```
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * An example of a project-specific implementation.
 *
 * After registering this autoload function with SPL, the following line
 * would cause the function to attempt to load the \Swagger\Client\Baz\Qux class
 * from /path/to/project/lib/Baz/Qux.php:
 *
 *      new \Swagger\Client\Baz\Qux;
 *
 * @param string $class The fully-qualified class name.
 *
 * @return void
 */
spl_autoload_register(function ($class) {

    // project-specific namespace prefix
    $prefix = 'Swagger\\Client\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/lib/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});