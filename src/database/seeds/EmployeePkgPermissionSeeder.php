<?php
namespace Abs\EmployeePkg\Database\Seeds;

use App\Permission;
use Illuminate\Database\Seeder;

class EmployeePkgPermissionSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$permissions = [
			//Employees
			[
				'display_order' => 99,
				'parent' => null,
				'name' => 'employees',
				'display_name' => 'Employees',
			],
			[
				'display_order' => 1,
				'parent' => 'employees',
				'name' => 'add-employee',
				'display_name' => 'Add',
			],
			[
				'display_order' => 2,
				'parent' => 'employees',
				'name' => 'edit-employee',
				'display_name' => 'Edit',
			],
			[
				'display_order' => 3,
				'parent' => 'employees',
				'name' => 'delete-employee',
				'display_name' => 'Delete',
			],

			//Designations
			[
				'display_order' => 99,
				'parent' => null,
				'name' => 'designations',
				'display_name' => 'Designations',
			],
			[
				'display_order' => 1,
				'parent' => 'designations',
				'name' => 'add-designation',
				'display_name' => 'Add',
			],
			[
				'display_order' => 2,
				'parent' => 'designations',
				'name' => 'edit-designation',
				'display_name' => 'Edit',
			],
			[
				'display_order' => 3,
				'parent' => 'designations',
				'name' => 'delete-designation',
				'display_name' => 'Delete',
			],

			//Punch Out Methods
			[
				'display_order' => 99,
				'parent' => null,
				'name' => 'punch-out-methods',
				'display_name' => 'Punch Out Methods',
			],
			[
				'display_order' => 1,
				'parent' => 'punch-out-methods',
				'name' => 'add-punch-out-method',
				'display_name' => 'Add',
			],
			[
				'display_order' => 2,
				'parent' => 'punch-out-methods',
				'name' => 'edit-punch-out-method',
				'display_name' => 'Edit',
			],
			[
				'display_order' => 3,
				'parent' => 'punch-out-methods',
				'name' => 'delete-punch-out-method',
				'display_name' => 'Delete',
			],

			//Skill Levels
			[
				'display_order' => 99,
				'parent' => null,
				'name' => 'skill-levels',
				'display_name' => 'Skill Levels',
			],
			[
				'display_order' => 1,
				'parent' => 'skill-levels',
				'name' => 'add-skill-level',
				'display_name' => 'Add',
			],
			[
				'display_order' => 2,
				'parent' => 'skill-levels',
				'name' => 'edit-skill-level',
				'display_name' => 'Edit',
			],
			[
				'display_order' => 3,
				'parent' => 'skill-levels',
				'name' => 'delete-skill-level',
				'display_name' => 'Delete',
			],

			//Mobile Attendance
			[
				'display_order' => 99,
				'parent' => 'mobile-permissions',
				'name' => 'mobile-attendance',
				'display_name' => 'Attendance',
			],

		];
		Permission::createFromArrays($permissions);
	}
}