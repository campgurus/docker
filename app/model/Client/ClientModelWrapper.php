<?php
namespace Neoan3\Model\Client;

use Neoan3\Provider\Model\ModelWrapper;
use Neoan3\Provider\Model\ModelWrapperTrait;

class ClientModelWrapper extends ClientModel implements ModelWrapper
{
	use ModelWrapperTrait;

	private ?string $id;
	private ?string $insert_date;
	private ?string $delete_date = null;
	private string $name;
	private ?string $website = null;
	private ?string $description = null;
	private ?string $image_url = null;
	private ?string $poc = null;
	private ?string $email = null;

	public function getId(): ?string
	{
		return $this->id;
	}

	public function setId($input): ClientModelWrapper
	{
		$this->id = $input;
		return $this;
	}

	public function getInsertDate(): ?string
	{
		return $this->insert_date;
	}

	public function setInsertDate($input): ClientModelWrapper
	{
		$this->insert_date = $input;
		return $this;
	}

	public function getDeleteDate(): ?string
	{
		return $this->delete_date;
	}

	public function setDeleteDate($input): ClientModelWrapper
	{
		$this->delete_date = $input;
		return $this;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName($input): ClientModelWrapper
	{
		$this->name = $input;
		return $this;
	}

	public function getWebsite(): ?string
	{
		return $this->website;
	}

	public function setWebsite($input): ClientModelWrapper
	{
		$this->website = $input;
		return $this;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription($input): ClientModelWrapper
	{
		$this->description = $input;
		return $this;
	}

	public function getImageUrl(): ?string
	{
		return $this->image_url;
	}

	public function setImageUrl($input): ClientModelWrapper
	{
		$this->image_url = $input;
		return $this;
	}

	public function getPoc(): ?string
	{
		return $this->poc;
	}

	public function setPoc($input): ClientModelWrapper
	{
		$this->poc = $input;
		return $this;
	}

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail($input): ClientModelWrapper
	{
		$this->email = $input;
		return $this;
	}

}