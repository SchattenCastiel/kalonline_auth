<?php

$finder = (new PhpCsFixer\Finder())
    ->in([__DIR__ . '/../../src', __DIR__ . '/../../tests'])
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'short'],
        'array_indentation' => true,
        'braces' => [
            'allow_single_line_closure' => false,
            'allow_single_line_anonymous_class_with_empty_body' => false,
            'position_after_functions_and_oop_constructs' => 'next',
            'position_after_anonymous_constructs' => 'next',
            'position_after_control_structures' => 'next',
        ],
        'cast_spaces' => ['space' => 'none'],
        'class_reference_name_casing' => true,
        'concat_space' => ['spacing' => 'one'],
        'constant_case' => ['case' => 'lower'],
        'control_structure_braces' => true,
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'assign_null_coalescing_to_coalesce_equal' => true,
        'global_namespace_import' => true,
        'no_trailing_comma_in_singleline' => true,
        'protected_to_private' => true,
        'trailing_comma_in_multiline' => true,
        'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
    ])
    ->setFinder($finder)
    ->setCacheFile(__DIR__ . '/../../var/cache/dev/.php-cs-fixer.cache')
;
