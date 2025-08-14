<?php
use App\Models\admin\Category;


function getParentCategory($parent_id){
    $category = Category::where('id', $parent_id)->select('id', 'name')->first();
    return $category;

    // Check if the category is found before calling select
    if ($category) {
        // Now $category contains the category with the given ID
        $parentCategories = $category->select('id', 'name')->first();
        return $parentCategories;
    }
    return null;
}