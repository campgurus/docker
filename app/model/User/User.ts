interface User{
	readonly id?: string,
	readonly insert_date_st: number,
	insert_date?: string,
	readonly delete_date_st: number,
	delete_date?: string,
	email: string,
	password: string,
}

export {User}