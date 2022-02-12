interface Call{
	readonly id?: string,
	readonly insert_date_st: number,
	insert_date?: string,
	readonly delete_date_st: number,
	delete_date?: string,
	contact_id?: string,
	outlet_id?: string,
	client_id?: string,
	description: string,
}

export {Call}