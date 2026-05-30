import AdminLayout from '@/Layouts/AdminLayout';
import { Link, router } from '@inertiajs/react';
import { useState } from 'react';

interface User {
    id: number;
    name: string;
    email: string;
    role: string;
}

interface PaginationLink {
    url: string | null;
    label: string;
    active: boolean;
}

interface Props {
    users: {
        data: User[];
        links: PaginationLink[];
    };

    filters: {
        search?: string;
        role?: string;
    };
}

export default function Index({ users, filters }: Props) {

    const [search, setSearch] = useState(filters.search || '');
    const [role, setRole] = useState(filters.role || '');

    const handleFilter = (
        searchValue = search,
        roleValue = role
    ) => {

        router.get(
            '/admin/users',
            {
                search: searchValue,
                role: roleValue,
            },
            {
                preserveState: true,
                replace: true,
            }
        );

    };

    const deleteUser = (id: number) => {

        if (confirm('Yakin ingin menghapus user?')) {

            router.delete(`/admin/users/${id}`, {
                preserveScroll: true,
            });

        }
    };

    return (
        <AdminLayout>

            <div className="p-6">

                {/* HEADER */}
                <div className="flex justify-between items-center mb-6">

                    <div>

                        <h1 className="text-2xl font-bold text-gray-800">
                            Kelola User
                        </h1>

                        <p className="text-gray-500">
                            Management user sistem rumah sakit
                        </p>

                    </div>

                    <Link
                        href="/admin/users/create"
                        className="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl transition"
                    >
                        Tambah User
                    </Link>

                </div>

                {/* FILTER */}
                <div className="flex flex-col md:flex-row gap-4 mb-6">

                    <input
                        type="text"
                        placeholder="Cari nama atau email..."
                        value={search}
                        onChange={(e) => {

                            setSearch(e.target.value);

                            handleFilter(e.target.value, role);

                        }}
                        className="border border-gray-300 rounded-xl p-3 w-full"
                    />

                    <select
                        value={role}
                        onChange={(e) => {

                            setRole(e.target.value);

                            handleFilter(search, e.target.value);

                        }}
                        className="border border-gray-300 rounded-xl p-3 w-full md:w-60"
                    >

                        <option value="">
                            Semua Role
                        </option>

                        <option value="admin">
                            Admin
                        </option>

                        <option value="dokter">
                            Dokter
                        </option>

                        <option value="staff">
                            Staff
                        </option>

                        <option value="apoteker">
                            Apoteker
                        </option>

                        <option value="kasir">
                            Kasir
                        </option>

                    </select>

                </div>

                {/* TABLE */}
                <div className="bg-white rounded-2xl shadow overflow-hidden">

                    <table className="w-full">

                        <thead className="bg-gray-100">

                            <tr>

                                <th className="p-4 text-left">
                                    Nama
                                </th>

                                <th className="p-4 text-left">
                                    Email
                                </th>

                                <th className="p-4 text-left">
                                    Role
                                </th>

                                <th className="p-4 text-left">
                                    Action
                                </th>

                            </tr>

                        </thead>

                        <tbody>

                            {users.data.length > 0 ? (

                                users.data.map((user) => (

                                    <tr
                                        key={user.id}
                                        className="border-t"
                                    >

                                        <td className="p-4">
                                            {user.name}
                                        </td>

                                        <td className="p-4">
                                            {user.email}
                                        </td>

                                        <td className="p-4 capitalize">
                                            {user.role}
                                        </td>

                                        <td className="p-4">

                                            <div className="flex gap-2">

                                                <Link
                                                    href={`/admin/users/${user.id}/edit`}
                                                    className="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg"
                                                >
                                                    Edit
                                                </Link>

                                                <button
                                                    onClick={() => deleteUser(user.id)}
                                                    className="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg"
                                                >
                                                    Hapus
                                                </button>

                                            </div>

                                        </td>

                                    </tr>

                                ))

                            ) : (

                                <tr>

                                    <td
                                        colSpan={4}
                                        className="text-center p-6 text-gray-500"
                                    >
                                        Data user tidak ditemukan
                                    </td>

                                </tr>

                            )}

                        </tbody>

                    </table>

                </div>

                {/* PAGINATION */}
                <div className="flex flex-wrap gap-2 mt-6">

                    {users.links.map((link, index) => (

                        <button
                            key={index}
                            disabled={!link.url}
                            onClick={() => link.url && router.visit(link.url)}
                            className={`
                                px-4 py-2 rounded-lg border text-sm
                                ${link.active
                                    ? 'bg-blue-600 text-white'
                                    : 'bg-white hover:bg-gray-100'
                                }
                                ${!link.url && 'opacity-50 cursor-not-allowed'}
                            `}
                            dangerouslySetInnerHTML={{
                                __html: link.label
                            }}
                        />

                    ))}

                </div>

            </div>

        </AdminLayout>
    );
}