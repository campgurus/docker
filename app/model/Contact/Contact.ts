interface Contact{
	readonly id?: string,
	readonly insert_date_st: number,
	insert_date?: string,
	readonly delete_date_st: number,
	delete_date?: string,
	name: string,
	email?: string,
	image_url?: string,
	bio?: string,
}

export {Contact}