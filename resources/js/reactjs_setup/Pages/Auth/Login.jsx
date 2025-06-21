import GuestLayout from '@/layouts/GuestLayout';
import { Link } from '@inertiajs/react';
import { BASE_URL } from '@/config';
export default function Login() {
  return (
    <GuestLayout>
      <div>
        <Link href={BASE_URL + '/department'}> Department </Link>
        <Link href={route('department.index')}> Dept v2 </Link>

        <p>login page</p>
      </div>
    </GuestLayout>
  );
}
