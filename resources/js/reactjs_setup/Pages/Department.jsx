import { BASE_URL } from '@/config';
import GuestLayout from '@/layouts/GuestLayout';
import { Link, Head } from '@inertiajs/react';

export default function Department() {
  return (
    <GuestLayout>
      <Head title="Department" />
      <div>
        <Link href={BASE_URL + '/login'}> Login page </Link>
        <Link href={route('login')}> Login v2 </Link>
        <p>Department page</p>

        <input
          type="text"
          className="form-input rounded-full px-4 py-3 text-pink-500"
        />

        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">
          Defaul
        </span>
        <span class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-gray-700 dark:text-gray-300">
          Dark
        </span>
        <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-red-900 dark:text-red-300">
          Red
        </span>
        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-green-900 dark:text-green-300">
          Green
        </span>
        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-yellow-900 dark:text-yellow-300">
          Yellow
        </span>
        <span class="bg-indigo-100 text-indigo-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-indigo-900 dark:text-indigo-300">
          Indigo
        </span>
        <span class="bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-purple-900 dark:text-purple-300">
          Purple
        </span>
        <span class="bg-pink-100 text-pink-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-pink-900 dark:text-pink-300">
          Pink
        </span>
      </div>
    </GuestLayout>
  );
}
