<?php

namespace App\Controllers;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class SiloNameController
{

    protected $notesService;

    public function __construct($service)
    {
        $this->siloNameService = $service;
    }

    public function getAll()
    {
        return new JsonResponse($this->siloNameService->getAll());
    }

    public function save(Request $request)
    {

        $siloName = $this->getDataFromRequest($request);
        return new JsonResponse(array("id" => $this->siloNameService->save($siloName)));

    }

    public function update($id, Request $request)
    {
        $note = $this->getDataFromRequest($request);
        $this->notesService->update($id, $note);
        return new JsonResponse($note);

    }

    public function delete($id)
    {

        return new JsonResponse($this->siloNameService->delete($id));

    }

    public function getDataFromRequest(Request $request)
    {
        return $siloName = array(
            "siloName" => $request->request->get("siloName")
        );
    }
}