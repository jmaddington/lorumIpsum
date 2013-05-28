<?php

$packageNameLower = 'lorumIpsum'; /* No spaces, no dashes */

$components = array(
    /* These are used to define the package and set values for placeholders */
    'packageName' => 'lorumIpsum',  /* No spaces, no dashes */
    'packageNameLower' => $packageNameLower,
    'packageDescription' => 'Lorum Ipsum generator',
    'version' => '0.0.1',
    'release' => 'beta1',
    'author' => 'JM Addington',
    'email' => 'jm@jmaddington.com',
    'authorUrl' => 'http://www.jmaddington.com',
    'authorSiteName' => "JM Addington",
    'packageDocumentationUrl' => 'N/A',
    'copyright' => '2013',

    /* no need to edit this except to change format */
    'createdon' => strftime('%m-%d-%Y'),

//    'gitHubUsername' => 'jmaddington',
//    'gitHubRepository' => 'lorumIpsum',

    /* two-letter code of your primary language */
    'primaryLanguage' => 'en',

    /* Set directory and file permissions for project directories */
    'dirPermission' => 0755,  /* No quotes!! */
    'filePermission' => 0644, /* No quotes!! */

    /* Define source and target directories (mycomponent root and core directories) */
    'mycomponentRoot' => $this->modx->getOption('mc.root', null,
        MODX_CORE_PATH . 'components/mycomponent/'),
    /* path to MyComponent source files */
    'mycomponentCore' => $this->modx->getOption('mc.core_path', null,
        MODX_CORE_PATH . 'components/mycomponent/core/components/mycomponent/'),
    /* path to new project root */
    'targetRoot' => MODX_ASSETS_PATH . 'mycomponents/' . $packageNameLower . '/',


    /* *********************** NEW SYSTEM SETTINGS ************************ */

    /* If your extra needs new System Settings, set their field values here.
     * You can also create or edit them in the Manager (System -> System Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra */

    'newSystemSettings' => array(
        'lorumIpsum.corepath' => array( // key
            'key' => 'lorumIpsum.core_path',
            'name' => 'lorumIpsum core path',
            'description' => '',
            'namespace' => 'lorumIpsum',
            'xtype' => 'textfield',
            'value' => 'core/components/lorumIpsum',
            //'area' => 'area1',
        ),
//        'lorumIpsum_system_setting2' => array( // key
//            'key' => 'lorumIpsum_system_setting2',
//            'name' => 'lorumIpsum Setting Two',
//            'description' => 'Description for setting two',
//            'namespace' => 'lorumIpsum',
//            'xtype' => 'combo-boolean',
//            'value' => true,
//            'area' => 'area2',
//        ),
    ),

    /* ************************ NEW SYSTEM EVENTS ************************* */

    /* Array of your new System Events (not default
     * MODX System Events). Listed here so they can be created during
     * install and removed during uninstall.
     *
     * Warning: Do *not* list regular MODX System Events here !!! */

    'newSystemEvents' => array(
//        'OnMyEvent1' => array(
//            'name' => 'OnMyEvent1',
//        ),
//        'OnMyEvent2' => array(
//            'name' => 'OnMyEvent2',
//            'groupname' => 'lorumIpsum',
//            'service' => 1,
//        ),
    ),

    /* ************************ NAMESPACE(S) ************************* */
    /* (optional) Typically, there's only one namespace which is set
     * to the $packageNameLower value. Paths should end in a slash
    */

    'namespaces' => array(
        'lorumIpsum' => array(
            'name' => 'lorumIpsum',
            'path' => '{core_path}components/lorumIpsum/',
            'assets_path' => '{assets_path}components/lorumIpsum/',
        ),

    ),

    /* ************************ CONTEXT(S) ************************* */
    /* (optional) List any contexts other than the 'web' context here
    */

    'contexts' => array(
//        'lorumIpsum' => array(
//            'key' => 'lorumIpsum',
//            'description' => 'lorumIpsum context',
//            'rank' => 2,
//        )
    ),

    /* *********************** CONTEXT SETTINGS ************************ */

    /* If your extra needs Context Settings, set their field values here.
     * You can also create or edit them in the Manager (Edit Context -> Context Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra.
     * The context_key should be the name of an actual context.
     * */

    'contextSettings' => array(
//        'lorumIpsum_context_setting1' => array(
//            'context_key' => 'lorumIpsum',
//            'key' => 'lorumIpsum_context_setting1',
//            'name' => 'lorumIpsum Setting One',
//            'description' => 'Description for setting one',
//            'namespace' => 'lorumIpsum',
//            'xtype' => 'textfield',
//            'value' => 'value1',
//            'area' => 'lorumIpsum',
//        ),
//        'lorumIpsum_context_setting2' => array(
//            'context_key' => 'lorumIpsum',
//            'key' => 'lorumIpsum_context_setting2',
//            'name' => 'lorumIpsum Setting Two',
//            'description' => 'Description for setting two',
//            'namespace' => 'lorumIpsum',
//            'xtype' => 'combo-boolean',
//            'value' => true,
//            'area' => 'lorumIpsum',
//        ),
    ),

    /* ************************* CATEGORIES *************************** */
    /* (optional) List of categories. This is only necessary if you
     * need to categories other than the one named for packageName
     * or want to nest categories.
    */

    'categories' => array(
        'lorumIpsum' => array(
            'category' => 'lorumIpsum',
            'parent' => '',  /* top level category */
        ),
//        'category2' => array(
//            'category' => 'Category2',
//            'parent' => 'lorumIpsum', /* nested under lorumIpsum */
//        )
    ),

    /* *************************** MENUS ****************************** */

    /* If your extra needs Menus, you can create them here
     * or create them in the Manager, and export them with exportObjects.
     * Be sure to set their namespace to the lowercase package name
     * of your extra.
     *
     * Every menu should have exactly one action */

//    'menus' => array(
//        'lorumIpsum' => array(
//            'text' => 'lorumIpsum',
//            'parent' => 'components',
//            'description' => 'ex_menu_desc',
//            'icon' => '',
//            'menuindex' => 0,
//            'params' => '',
//            'handler' => '',
//            'permissions' => '',
//
//            'action' => array(
//                'id' => '',
//                'namespace' => 'lorumIpsum',
//                'controller' => 'index',
//                'haslayout' => true,
//                'lang_topics' => 'lorumIpsum:default',
//                'assets' => '',
//            ),
//        ),
//    ),


    /* ************************* ELEMENTS **************************** */

    /* Array containing elements for your extra. 'category' is required
       for each element, all other fields are optional.
       Property Sets (if any) must come first!

       The standard file names are in this form:
           SnippetName.snippet.php
           PluginName.plugin.php
           ChunkName.chunk.html
           TemplateName.template.html

       If your file names are not standard, add this field:
          'filename' => 'actualFileName',
    */


    'elements' => array(

//        'propertySets' => array( /* all three fields are required */
//            'PropertySet1' => array(
//                'name' => 'PropertySet1',
//                'description' => 'Description for PropertySet1',
//                'category' => 'lorumIpsum',
//            ),
//            'PropertySet2' => array(
//                'name' => 'PropertySet2',
//                'description' => 'Description for PropertySet2',
//                'category' => 'lorumIpsum',
//            ),
//        ),

        'snippets' => array(
            'lorumIpsum' => array(
                'category' => 'lorumIpsum',
                'description' => 'Lorum Ipsum generator for MODX',
                'static' => true,
            ),
        ),

//        'plugins' => array(
//            'Plugin1' => array( /* minimal lorumIpsum */
//                'category' => 'lorumIpsum',
//            ),
//            'Plugin2' => array( /* lorumIpsum with static, events, and property sets */
//                'category' => 'lorumIpsum',
//                'description' => 'Description for Plugin one',
//                'static' => false,
//                'propertySets' => array( /* all property sets to be connected to element */
//                    'PropertySet1',
//                ),
//                'events' => array(
//                    /* minimal lorumIpsum - no fields */
//                    'OnUserFormSave' => array(),
//                    /* lorumIpsum with fields set */
//                    'OnMyEvent1' => array(
//                        'priority' => '0', /* priority of the event -- 0 is highest priority */
//                        'group' => 'plugins', /* should generally be set to 'plugins' */
//                        'propertySet' => 'PropertySet1', /* property set to be used in this pluginEvent */
//                    ),
//                    'OnMyEvent2' => array(
//                        'priority' => '3',
//                        'group' => 'plugins',
//                        'propertySet' => '',
//                    ),
//                    'OnDocFormSave' => array(
//                        'priority' => '4',
//                        'group' => 'plugins',
//                        'propertySet' => '',
//                    ),
//
//
//                ),
//            ),
//        ),

//        'chunks' => array(
//            'Chunk1' => array(
//                'category' => 'lorumIpsum',
//            ),
//            'Chunk2' => array(
//                'description' => 'Description for Chunk two',
//                'category' => 'lorumIpsum',
//                'static' => false,
//                'propertySets' => array(
//                    'PropertySet2',
//                ),
//            ),
//        ),

//        'templates' => array(
//            'Template1' => array(
//                'category' => 'lorumIpsum',
//            ),
//            'Template2' => array(
//                'category' => 'lorumIpsum',
//                'description' => 'Description for Template two',
//                'static' => false,
//                'propertySets' => array(
//                    'PropertySet2',
//                ),
//            ),
//        ),

//        'templateVars' => array(
//            'Tv1' => array(
//                'category' => 'lorumIpsum',
//                'description' => 'Description for TV one',
//                'caption' => 'TV One',
//                'propertySets' => array(
//                    'PropertySet1',
//                    'PropertySet2',
//                ),
//                'templates' => array(
//                    'default' => 1,
//                    'Template1' => 4,
//                    'Template2' => 4,
//
//
//                ),
//            ),
//            'Tv2' => array( /* lorumIpsum with templates, default, and static specified */
//                'category' => 'lorumIpsum',
//                'description' => 'Description for TV two',
//                'caption' => 'TV Two',
//                'static' => false,
//                'default_text' => '@INHERIT',
//                'templates' => array(
//                    'default' => 3, /* second value is rank -- for ordering TVs when editing resource */
//                    'Template1' => 4,
//                    'Template2' => 1,
//                ),
//            ),
//        ),

    ),
    /* (optional) will make all element objects static - 'static' field above will be ignored */
    'allStatic' => true,


    /* ************************* RESOURCES ****************************
     Important: This list only affects Bootstrap. There is another
     list of resources below that controls ExportObjects.
     * ************************************************************** */
    /* Array of Resource pagetitles for your Extra; All other fields optional.
       You can set any resource field here */
//    'resources' => array(
//        'Resource1' => array( /* minimal lorumIpsum */
//            'pagetitle' => 'Resource1',
//            'alias' => 'resource1',
//            'context_key' => 'lorumIpsum',
//        ),
//        'Resource2' => array( /* lorumIpsum with other fields */
//            'pagetitle' => 'Resource2',
//            'alias' => 'resource2',
//            'context_key' => 'lorumIpsum',
//            'parent' => 'Resource1',
//            'template' => 'Template2',
//            'richtext' => false,
//            'published' => true,
//            'tvValues' => array(
//                'Tv1' => 'SomeValue',
//                'Tv2' => 'SomeOtherValue',
//            ),
//        )
//    ),


    /* Array of languages for which you will have language files,
     *  and comma-separated list of topics
     *  ('.inc.php' will be added as a suffix). */
    'languages' => array(
        'en' => array(
            'default',
            'properties',
            'forms',
        ),
    ),
    /* ********************************************* */
    /* Define optional directories to create under assets.
     * Add your own as needed.
     * Set to true to create directory.
     * Set to hasAssets = false to skip.
     * Empty js and/or css files will be created.
     */
    'hasAssets' => true,
    'minifyJS' => true,
    /* minify any JS files */
    'assetsDirs' => array(
        'css' => false,
        /* If true, a default (empty) CSS file will be created */
        'js' => true,
        /* If true, a default (empty) JS file will be created */
        'images' => false,
        'audio' => false,
        'video' => false,
        'themes' => false,
    ),


    /* ********************************************* */
    /* Define basic directories and files to be created in project*/

    'docs' => array(
        'readme.txt',
        'license.txt',
        'changelog.txt',
        'tutorial.html'
    ),

    /* (optional) Description file for GitHub project home page */
    'readme.md' => true,
    /* assume every package has a core directory */
    'hasCore' => true,

    /* ********************************************* */
    /* (optional) Array of extra script resolver(s) to be run
     * during install. Note that resolvers to connect plugins to events,
     * property sets to elements, resources to templates, and TVs to
     * templates will be created automatically -- *don't* list those here!
     *
     * 'default' creates a default resolver named after the package.
     * (other resolvers may be created above for TVs and plugins).
     * Suffix 'resolver.php' will be added automatically */
    'resolvers' => array(
        'default',
//        'addUsers'
    ),

    /* (optional) Validators can abort the install after checking
     * conditions. Array of validator names (no
     * prefix of suffix) or '' 'default' creates a default resolver
     *  named after the package suffix 'validator.php' will be added */

    'validators' => array(
        'default',
        'hasGdLib'
    ),

    /* (optional) install.options is needed if you will interact
     * with user during the install.
     * See the user.input.php file for more information.
     * Set this to 'install.options' or ''
     * The file will be created as _build/install.options/user.input.php
     * Don't change the filename or directory name. */
    'install.options' => 'install.options',


    /* Suffixes to use for resource and element code files (not implemented)  */
    'suffixes' => array(
        'modPlugin' => '.php',
        'modSnippet' => '.php',
        'modChunk' => '.html',
        'modTemplate' => '.html',
        'modResource' => '.html',
    ),


    /* ********************************************* */
    /* (optional) Only necessary if you will have class files.
     *
     * Array of class files to be created.
     *
     * Format is:
     *
     * 'ClassName' => 'directory:filename',
     *
     * or
     *
     *  'ClassName' => 'filename',
     *
     * ('.class.php' will be appended automatically)
     *
     *  Class file will be created as:
     * yourcomponent/core/components/yourcomponent/model/[directory/]{filename}.class.php
     *
     * Set to array() if there are no classes. */
    'classes' => array(
        'lorumIpsum' => 'lorumIpsum:lorumIpsum',
        'lorumIpsumDb' => 'lorumIpsumDb:lorumIpsumDb',
    ),

    /* *******************************************
     * These settings control exportObjects.php  *
     ******************************************* */
    /* ExportObjects will update existing files. If you set dryRun
       to '1', ExportObjects will report what it would have done
       without changing anything. Note: On some platforms,
       dryRun is *very* slow  */

    'dryRun' => '0',

    /* Array of elements to export. All elements set below will be handled.
     *
     * To export resources, be sure to list pagetitles and/or IDs of parents
     * of desired resources
    */
    'process' => array(
//        'contexts',
        'snippets',
//        'plugins',
//        'templateVars',
        'templates',
        'chunks',
        'resources',
//        'propertySets',
        'systemSettings',
//        'contextSettings',
//        'systemEvents',
//        'menus'
    ),
    /*  Array  of resources to process. You can specify specific resources
        or parent (container) resources, or both.

        They can be specified by pagetitle or ID, but you must use the same method
        for all settings and specify it here. Important: use IDs if you have
        duplicate pagetitles */
    'getResourcesById' => false,

    'exportResources' => array(
//        'Resource1',
//        'Resource2',
    ),
    /* Array of resource parent IDs to get children of. */
    'parents' => array(),
    /* Also export the listed parent resources
      (set to false to include just the children) */
    'includeParents' => false,


    /* ******************** LEXICON HELPER SETTINGS ***************** */
    /* These settings are used by LexiconHelper */
    'rewriteCodeFiles' => false,
    /*# remove ~~descriptions */
    'rewriteLexiconFiles' => true,
    /* automatically add missing strings to lexicon files */
    /* ******************************************* */

    /* Array of aliases used in code for the properties array.
    * Used by the checkproperties utility to check properties in code against
    * the properties in your properties transport files.
    * if you use something else, add it here (OK to remove ones you never use.
    * Search also checks with '$this->' prefix -- no need to add it here. */
    'scriptPropertiesAliases' => array(
        'props',
        'sp',
        'config',
        'scriptProperties'
    ),
);

return $components;