<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/product_detail', function () {
    return view('product_detail');
});

Route::get('/view_product', function () {
    return view('view_product');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/franchisee', function () {
    return view('franchisee');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/refer_earn', function () {
    return view('refer_earn');
});
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
});
Route::get('/shipping-policy', function () {
    return view('shipping-policy');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/refund_policy', function () {
    return view('refund_policy');
});
Route::get('/why-freshful', function () {
    return view('why-freshful');
});
Route::get('/myaccount', function () {
    return view('myaccount');
});
Route::get('/checkout', function () {
    return view('checkout');
});


Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.login');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/all_orders', function () {
        return view('admin.all_orders');
    });
    Route::get('/order', function () {
        return view('admin.order');
    });
    Route::get('/products', function () {
        return view('admin.products');
    });
    Route::get('/edit_product', function () {
        return view('admin.edit_product');
    });
    Route::get('/buyers', function () {
        return view('admin.buyers');
    });
    Route::get('/pos_users', function () {
        return view('admin.pos_users');
    });
    Route::get('/hub_users', function () {
        return view('admin.hub_users');
    });
    Route::get('/inventory', function () {
        return view('admin.inventory');
    });
    Route::get('/add-product', function () {
        return view('admin.add_product');
    });
    Route::get('/view_buyer', function () {
        return view('admin.view_buyer');
    });
    Route::get('/view_pos_user', function () {
        return view('admin.view_pos_user');
    });
    Route::get('/hub', function () {
        return view('admin.hub');
    });
    Route::get('/add_pos_user', function () {
        return view('admin.add_pos_user');
    });
    Route::get('/add_hub_user', function () {
        return view('admin.add_hub_user');
    });
    Route::get('/view_hub_user', function () {
        return view('admin.view_hub_user');
    });
    Route::get('/marketing_managers', function () {
        return view('admin.marketing_managers');
    });
    Route::get('/view_marketing_manager', function () {
        return view('admin.view_marketing_manager');
    });
    Route::get('/add_marketing_manager', function () {
        return view('admin.add_marketing_manager');
    });
    Route::get('/setting', function () {
        return view('admin.setting');
    });
    Route::get('/logout', function () {
        return view('admin.logout');
    });
    Route::get('/app_banner', function () {
        return view('admin.app_banner');
    });
    Route::get('/city', function () {
        return view('admin.city');
    });
    Route::get('/delivery_price', function () {
        return view('admin.delivery_price');
    });
    Route::get('/hub', function () {
        return view('admin.hub');
    });
    Route::get('/home_offers', function () {
        return view('admin.home_offers');
    });
    Route::get('/promotions', function () {
        return view('admin.promotions');
    });
    Route::get('/privacy_policy', function () {
        return view('admin.privacy_policy');
    });
    Route::get('/push', function () {
        return view('admin.push');
    });
    Route::get('/role_type', function () {
        return view('admin.role_type');
    });
    Route::get('/news_letters', function () {
        return view('admin.news_letters');
    });
    Route::get('/contact_us', function () {
        return view('admin.contact_us');
    });
    Route::get('/frenchisee_enquiry', function () {
        return view('admin.frenchisee_enquiry');
    });
    Route::get('/policies', function () {
        return view('admin.policies');
    });
    Route::get('/queries', function () {
        return view('admin.queries');
    });
    Route::get('/add_product', function () {
        return view('admin.add_product');
    });
    Route::get('/edit_product', function () {
        return view('admin.edit_product');
    });
    Route::get('/account_managers', function () {
        return view('admin.account_managers');
    });
    Route::get('/marketing_managers', function () {
        return view('admin.marketing_managers');
    });
    Route::get('/customer_care_managers', function () {
        return view('admin.customer_care_managers');
    });
    Route::get('/hr_managers', function () {
        return view('admin.hr_managers');
    });
    Route::get('/planning_managers', function () {
        return view('admin.planning_managers');
    });
    Route::get('/area_managers', function () {
        return view('admin.area_managers');
    });
    Route::get('/country_managers', function () {
        return view('admin.country_managers');
    });
    Route::get('/add_account_manager', function () {
        return view('admin.add_account_manager');
    });
    Route::get('/view_account_manager', function () {
        return view('admin.view_account_manager');
    });
    Route::get('/add_marketing_manager', function () {
        return view('admin.add_marketing_manager');
    });
    Route::get('/view_marketing_manager', function () {
        return view('admin.view_marketing_manager');
    });
    Route::get('/add_customer_care_manager', function () {
        return view('admin.add_customer_care_manager');
    });
    Route::get('/view_customer_care_manager', function () {
        return view('admin.view_customer_care_manager');
    });
    Route::get('/add_hr_manager', function () {
        return view('admin.add_hr_manager');
    });
    Route::get('/view_hr_manager', function () {
        return view('admin.view_hr_manager');
    });
    Route::get('/add_planning_manager', function () {
        return view('admin.add_planning_manager');
    });
    Route::get('/view_planning_manager', function () {
        return view('admin.view_planning_manager');
    });
    Route::get('/add_area_manager', function () {
        return view('admin.add_area_manager');
    });
    Route::get('/view_area_manager', function () {
        return view('admin.view_area_manager');
    });
    Route::get('/add_country_manager', function () {
        return view('admin.add_country_manager');
    });
    Route::get('/view_country_manager', function () {
        return view('admin.view_country_manager');
    });
    Route::get('/production_user', function () {
        return view('admin.production_user');
    });
    Route::get('/add_production_user', function () {
        return view('admin.add_production_user');
    }); 
    Route::get('/view_production_user', function () {
        return view('admin.view_production_user');
    }); 
    Route::get('/operation_managers', function () {
        return view('admin.operation_managers');
    }); 
    Route::get('/add_operation_manager', function () {
        return view('admin.add_operation_manager');
    }); 
    Route::get('/view_operation_manager', function () {
        return view('admin.view_operation_manager');
    }); 

    Route::get('/profile', function () {
        return view('admin.profile');
    }); 
    Route::get('/edit_profile', function () {
        return view('admin.edit_profile');
    }); 
    Route::get('/certificate', function () {
        return view('admin.certificate');
    }); 
    
    Route::get('/inventory_report_detail', function () {
        return view('admin.inventory_report_detail');
    }); 
    Route::get('/sale_summary', function () {
        return view('admin.sale_summary');
    }); 



});
