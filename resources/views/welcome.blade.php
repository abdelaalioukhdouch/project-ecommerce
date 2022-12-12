<?php

    $categories = App\Models\Category::whereNull('parent_id');
        
        dd($categories);
    