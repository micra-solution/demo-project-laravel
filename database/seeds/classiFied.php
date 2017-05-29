<?php

use Illuminate\Database\Seeder;
use App\Role;
Use App\Permission;
Use App\User;
Use App\Product;

class classiFied extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
      
    	$admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "admin";
        $admin->description = "User is Admin of classified";
        $admin->save();

        $subadmin = new Role();
        $subadmin->name = "sub_admin";
        $subadmin->display_name = "Sub Admin";
        $subadmin->description = "User is sub_admin of classified";
        $subadmin->save();

        $end_user = new Role();
        $end_user->name = "end_user";
        $end_user->display_name = "End User";
        $end_user->description = "it is User of classifieds";
        $end_user->save();

        $createProduct = new Permission();
        $createProduct->name = "create_product";
        $createProduct->display_name = "Create Product";
        $createProduct->description = "Create New Product";
        $createProduct->save();

        $editProduct = new Permission();
        $editProduct->name = "edit_product";
        $editProduct->display_name = "Edit Product";
        $editProduct->description = "Edit Product";
        $editProduct->save();

        $deleteProduct = new Permission();
        $deleteProduct->name = "delete_product";
        $deleteProduct->display_name = "Delete Product";
        $deleteProduct->description = "Delete Product";
        $deleteProduct->save();


        $admin->attachPermissions(array($editProduct, $deleteProduct));
        
        $end_user->attachPermissions(array($createProduct, $editProduct));

        $user = new User;
        $user->name = "Rahul Mulani";
        $user->email = "rbmulani7009@gmail.com";
        $user->password = Hash::make('rahul123');
        $user->save();

        $user->attachRole($admin);

        $user1 = new User;
        $user1->name = "Dhaval";
        $user1->email = "thummardhaval64@gmail.com";
        $user1->password = Hash::make('dhaval123');
        $user1->save();

        $user1->attachRole($end_user);

        $user2 = new User;
        $user2->name = "mayur";
        $user2->email = "meerhirpara009@gmail.com";
        $user2->password = Hash::make('mayur123');
		$user2->save();

        $user2->attachRole($end_user);

        $user3 = new User;
        $user3->name = "Punit";
        $user3->email = "punitkathiriya@gmail.com";
        $user3->password = Hash::make('punit123');
        $user3->save();

        $user3->attachRole($end_user);

        $user4 = new User;
        $user4->name = "Jatin";
        $user4->email = "jatin@micrasolution.com"; 
        $user4->password = Hash::make('jatin123');
        $user4->save();

        $user4->attachRole($end_user);

        $user5 = new User;
        $user5->name = "Darshak";
        $user5->email = "darshakshekhda@gmail.com"; 
        $user5->password = Hash::make('darshak123');
        $user5->save();

        $user5->attachRole($end_user);

        $user6 = new User;
        $user6->name = "keval";
        $user6->email = "mangukiyakeval37@gmail.com"; 
        $user6->password = Hash::make('keval123');
        $user6->save();

        $user6->attachRole($end_user);

        $user7 = new User;
        $user7->name = "Sagar";
        $user7->email = "kachhadiya.sagar000@gmail.com"; 
        $user7->password = Hash::make('sagar123');
        $user7->save();

        $user7->attachRole($end_user);

        $user8 = new User;
        $user8->name = "Ravi";
        $user8->email = "ravibhanderi@gmail.com"; 
        $user8->password = Hash::make('ravi123');
        $user8->save();

        $user8->attachRole($end_user);

        $user9 = new User;
        $user9->name = "Mehul";
        $user9->email = "mehulpaghadal2912@gmail.com"; 
        $user9->password = Hash::make('mehul123');
        $user9->save();

        $user9->attachRole($end_user);

        $user10 = new User;
        $user10->name = "Kirtan";
        $user10->email = "dudhatkirtan20@gmail.com"; 
        $user10->password = Hash::make('kirtan123');
        $user10->save();

        $user10->attachRole($end_user);

    }
    
}
