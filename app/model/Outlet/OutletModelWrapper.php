<?php
namespace Neoan3\Model\Outlet;

use Neoan3\Provider\Model\ModelWrapper;
use Neoan3\Provider\Model\ModelWrapperTrait;

class OutletModelWrapper extends OutletModel implements ModelWrapper
{
	use ModelWrapperTrait;

	private ?string $id;
	private ?string $insert_date;
	private ?string $delete_date = null;
	private string $name;
	private ?string $website = null;
	private ?string $image_url = null;
	private ?string $description = null;

	public function getId(): ?string
	{
		return $this->id;
	}

	public function setId($input): OutletModelWrapper
	{
		$this->id = $input;
		return $this;
	}

	public function getInsertDate(): ?string
	{
		return $this->insert_date;
	}

	public function setInsertDate($input): OutletModelWrapper
	{
		$this->insert_date = $input;
		return $this;
	}

	public function getDeleteDate(): ?string
	{
		return $this->delete_date;
	}

	public function setDeleteDate($input): OutletModelWrapper
	{
		$this->delete_date = $input;
		return $this;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName($input): OutletModelWrapper
	{
		$this->name = $input;
		return $this;
	}

	public function getWebsite(): ?string
	{
		return $this->website;
	}

	public function setWebsite($input): OutletModelWrapper
	{
		$this->website = $input;
		return $this;
	}

	public function getImageUrl(): ?string
	{
		return $this->image_url;
	}

	public function setImageUrl($input): OutletModelWrapper
	{
		$this->image_url = $input;
		return $this;
	}

	public function getDescription(): ?string
	{
		return $this->description;
	}

	public function setDescription($input): OutletModelWrapper
	{
		$this->description = $input;
		return $this;
	}

}