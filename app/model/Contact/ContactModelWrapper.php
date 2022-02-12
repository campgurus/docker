<?php
namespace Neoan3\Model\Contact;

use Neoan3\Provider\Model\ModelWrapper;
use Neoan3\Provider\Model\ModelWrapperTrait;

class ContactModelWrapper extends ContactModel implements ModelWrapper
{
	use ModelWrapperTrait;

	private ?string $id;
	private ?string $insert_date;
	private ?string $delete_date = null;
	private string $name;
	private ?string $email = null;

	public function getId(): ?string
	{
		return $this->id;
	}

	public function setId($input): ContactModelWrapper
	{
		$this->id = $input;
		return $this;
	}

	public function getInsertDate(): ?string
	{
		return $this->insert_date;
	}

	public function setInsertDate($input): ContactModelWrapper
	{
		$this->insert_date = $input;
		return $this;
	}

	public function getDeleteDate(): ?string
	{
		return $this->delete_date;
	}

	public function setDeleteDate($input): ContactModelWrapper
	{
		$this->delete_date = $input;
		return $this;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName($input): ContactModelWrapper
	{
		$this->name = $input;
		return $this;
	}

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail($input): ContactModelWrapper
	{
		$this->email = $input;
		return $this;
	}

}