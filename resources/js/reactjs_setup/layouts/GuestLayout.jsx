import { Link } from '@inertiajs/react';

export default function GuestLayout({ children }) {
  //destructure object props in the function parameter(its reuires the exact key name the object) {children}
  //   const { children } = props;
  //   console.log('sssss', props.children);
  //   console.log('sssss', children);

  return (
    <div className="container">
      <header className="bg-amber-400 text-blue-400 p-4">
        <nav>
          <Link href="/"> Home </Link>
          <Link href="/about"> About </Link>
        </nav>
      </header>
      <main>{children}</main>
    </div>
  );
}
