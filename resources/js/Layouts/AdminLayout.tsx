export default function AdminLayout({
    children,
}: {
    children: React.ReactNode;
}) {
    return (
        <div className="min-h-screen bg-gray-100">

            <div className="flex">

                <aside className="w-64 bg-slate-900 text-white min-h-screen p-6">
                    <h1 className="text-2xl font-bold mb-8">
                        SIMRS Admin
                    </h1>

                    <ul className="space-y-4">

                        <li>
                            Dashboard
                        </li>

                        <li>
                            Kelola User
                        </li>

                    </ul>
                </aside>

                <main className="flex-1">
                    {children}
                </main>

            </div>

        </div>
    );
}