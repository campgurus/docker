interface Client{
	readonly id?: string,
	readonly insert_date_st: number,
	insert_date?: string,
	readonly delete_date_st: number,
	delete_date?: string,
	name: string,
	website?: string,
	description?: string,
	image_url?: string,
	poc?: string,
	email?: string,
}

export {Client}