<?php
    if (!empty($args['fields'])) {
        $fields = $args['fields'];
    } elseif (!empty($args['section'])) {
        $fields = get_field($args['section'], 'options');
    }

    if (
        !empty($fields)
        && (empty($fields['hide_on_pages']) || !in_array($post->ID, $fields['hide_on_pages']))
    ) {
        foreach ($fields as $field_name => $field) {
            ${"$field_name"} = $field;
        }
    }
?> 