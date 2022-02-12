<?php
namespace Neoan3\Model\Call;

use Neoan3\Provider\Model\ModelWrapper;
use Neoan3\Provider\Model\ModelWrapperTrait;

class CallModelWrapper extends CallModel implements ModelWrapper
{
	use ModelWrapperTrait;

	private ?string $id;
	private ?string $insert_date;
	private ?string $delete_date = null;
	private ?string $contact_id;
	private ?string $outlet_id;
	private ?string $client_id;
	private string $description;

	public function getId(): ?string
	{
		return $this->id;
	}

	public function setId($input): CallModelWrapper
	{
		$this->id = $input;
		return $this;
	}

	public function getInsertDate(): ?string
	{
		return $this->insert_date;
	}

	public function setInsertDate($input): CallModelWrapper
	{
		$this->insert_date = $input;
		return $this;
	}

	public function getDeleteDate(): ?string
	{
		return $this->delete_date;
	}

	public function setDeleteDate($input): CallModelWrapper
	{
		$this->delete_date = $input;
		return $this;
	}

	public function getContactId(): ?string
	{
		return $this->contact_id;
	}

	public function setContactId($input): CallModelWrapper
	{
		$this->contact_id = $input;
		return $this;
	}

	public function getOutletId(): ?string
	{
		return $this->outlet_id;
	}

	public function setOutletId($input): CallModelWrapper
	{
		$this->outlet_id = $input;
		return $this;
	}

	public function getClientId(): ?string
	{
		return $this->client_id;
	}

	public function setClientId($input): CallModelWrapper
	{
		$this->client_id = $input;
		return $this;
	}

	public function getDescription(): string
	{
		return $this->description;
	}

	public function setDescription($input): CallModelWrapper
	{
		$this->description = $input;
		return $this;
	}

}