<?php

$fileHeader = <<<EOF
This file is part of the "guide" Extension for TYPO3 CMS.

For the full copyright and license information, please read the
LICENSE.md file that was distributed with this source code.
EOF;

$rules = [
    '@DoctrineAnnotation' => true,
    '@PER-CS' => true,
    'array_syntax' => ['syntax' => 'short'],
    'blank_line_after_opening_tag' => true,
    'cast_spaces' => ['space' => 'none'],
    'compact_nullable_type_declaration' => true,
    'concat_space' => ['spacing' => 'one'],
    'declare_equal_normalize' => ['space' => 'none'],
    'dir_constant' => true,
    'function_to_constant' => ['functions' => ['get_called_class', 'get_class', 'get_class_this', 'php_sapi_name', 'phpversion', 'pi']],
    'lowercase_cast' => true,
    'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
    'modernize_types_casting' => true,
    'native_function_casing' => true,
    'new_with_parentheses' => true,
    'no_alias_functions' => true,
    'no_blank_lines_after_phpdoc' => true,
    'no_empty_phpdoc' => true,
    'no_empty_statement' => true,
    'no_extra_blank_lines' => true,
    'no_leading_import_slash' => true,
    'no_leading_namespace_whitespace' => true,
    'no_null_property_initialization' => true,
    'no_short_bool_cast' => true,
    'no_singleline_whitespace_before_semicolons' => true,
    'no_superfluous_elseif' => true,
    'no_trailing_comma_in_singleline' => true,
    'no_unneeded_control_parentheses' => true,
    'no_unused_imports' => true,
    'no_useless_else' => true,
    'no_useless_nullsafe_operator' => true,
    'no_whitespace_in_blank_line' => true,
    'ordered_imports' => [
        'imports_order' => [
            'class',
            'function',
            'const',
        ],
        'sort_algorithm' => 'alpha',
    ],
    'php_unit_construct' => ['assertions' => ['assertEquals', 'assertSame', 'assertNotEquals', 'assertNotSame']],
    'php_unit_mock_short_will_return' => true,
    'php_unit_test_case_static_method_calls' => ['call_type' => 'self'],
    'phpdoc_no_access' => false,
    'phpdoc_no_empty_return' => true,
    'phpdoc_no_package' => true,
    'phpdoc_scalar' => true,
    'phpdoc_trim' => true,
    'phpdoc_types' => true,
    'strict_comparison' => false,
    'phpdoc_types_order' => ['null_adjustment' => 'always_last', 'sort_algorithm' => 'none'],
    'return_type_declaration' => ['space_before' => 'none'],
    'single_quote' => true,
    'single_space_around_construct' => true,
    'single_line_comment_style' => ['comment_types' => ['hash']],
    'single_trait_insert_per_statement' => true,
    'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    'type_declaration_spaces' => true,
    'whitespace_after_comma_in_array' => ['ensure_single_space' => true],
    'yoda_style' => ['equal' => false, 'identical' => false, 'less_and_greater' => false],
    'header_comment' => [
        'header' => $fileHeader,
        'comment_type' => 'comment',
        'location' => 'after_declare_strict',
        'separate' => 'both',
    ],
];

$config = (new \PhpCsFixer\Config())
    ->setCacheFile(__DIR__.'/.php-cs-fixer.cache')
    ->setRiskyAllowed(true)
    ->setRules($rules)
    ->setParallelConfig(\PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());

$finder = \PhpCsFixer\Finder::create()
    ->exclude('../Build')
    ->in(__DIR__ . '/../');

return $config->setFinder($finder);