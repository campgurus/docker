<?php
namespace Neoan3\Model\User;

use Neoan3\Provider\Model\ModelWrapper;
use Neoan3\Provider\Model\ModelWrapperTrait;

class UserModelWrapper extends UserModel implements ModelWrapper
{
	use ModelWrapperTrait;

	private ?string $id;
	private ?string $insert_date;
	private ?string $delete_date = null;
	private string $email;
	private string $password;

	public function getId(): ?string
	{
		return $this->id;
	}

	public function setId($input): UserModelWrapper
	{
		$this->id = $input;
		return $this;
	}

	public function getInsertDate(): ?string
	{
		return $this->insert_date;
	}

	public function setInsertDate($input): UserModelWrapper
	{
		$this->insert_date = $input;
		return $this;
	}

	public function getDeleteDate(): ?string
	{
		return $this->delete_date;
	}

	public function setDeleteDate($input): UserModelWrapper
	{
		$this->delete_date = $input;
		return $this;
	}

	public function getEmail(): string
	{
		return $this->email;
	}

	public function setEmail($input): UserModelWrapper
	{
		$this->email = $input;
		return $this;
	}

	public function getPassword(): string
	{
		return $this->password;
	}

	public function setPassword($input): UserModelWrapper
	{
		$this->password = $input;
		return $this;
	}

}