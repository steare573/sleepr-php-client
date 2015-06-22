{
  "agent": {
    "get": {
      "baseUrl": "common.rv-api.redventures.net/agent/{agentId}.json",
      "requiredFields": [
        "agentId"
      ],
      "fieldMeta": {
        "agentId": {
          "excludeFromPayload": true
        }
      },
      "method": "get"
    },
    "getByField": {
      "baseUrl": "common.rv-api.redventures.net/agent/{searchColumn}/{searchValue}.json",
      "requiredFields": [
        "company",
        "searchColumn",
        "searchValue"
      ],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        },
        "searchColumn": {
          "excludeFromPayload": true
        },
        "searchValue": {
          "excludeFromPayload": true
        }

      },
      "method": "get"
    }
  },
  "callData": {
    "get": {
      "baseUrl": "{company}.rv-api.redventures.net/calldata/{callId}.json",
      "method": "get",
      "requiredFields": [
        "company",
        "callId"
      ],
      "fieldMeta": {
        "company": {
            "excludeFromPayload": true
        },
        "callId": {
            "excludeFromPayload": true
        }
      }
    },
    "createCallData": {
      "baseUrl": "{company}.rv-api.redventures.net/calldata.json",
      "method": "post",
      "requiredFields": [
        "callId",
        "company"
      ],
      "fieldMeta": {
        "company": {
            "excludeFromPayload": true
        },
        "callId": {
            "excludeFromPayload": true
        }
      }
    },
    "updateCallData": {
      "baseUrl": "{company}.rv-api.redventures.net/calldata/{callId}.json",
      "method": "put",
      "requiredFields": ["company", "callId"],
      "fieldMeta": {
        "company": {
            "excludeFromPayload": true
        },
        "callId": {
            "excludeFromPayload": true
        }
      }
    }
  },
  "contact": {
    "get": {
      "baseUrl": "{company}.rv-api.redventures.net/contact/{contactId}.json",
      "method": "get",
      "requiredFields": [
        "company",
        "contactId"
      ],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        },
        "contactId": {
          "excludeFromPayload": true
        }
      }
    },
    "createContact": {
      "baseUrl": "{company}.rv-api.redventures.net/contact.json",
      "method": "post",
      "requiredFields": [
        "firstName",
        "lastName",
        "company"
      ],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        }
      }

    },
    "updateContact": {
      "baseUrl": "{company}.rv-api.redventures.net/contact/{contactId}.json",
      "method": "put",
      "requiredFields": ["company", "contactId"],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        }
      }
    },
    "search": {
        "baseUrl": "{company}.rv-api.redventures.net/contact.json",
        "method": "get",
        "requiredFields": ["company"],
        "fieldMeta": {
            "company": {
                "excludeFromPayload": true
            }
        }
    }

  },
  "company": {
    "get": {
      "baseUrl": "common.rv-api.redventures.net/company/{companyId}.json",
      "method": "get",
      "requiredFields": ["companyId"],
      "fieldMeta": {
        "companyId": {
          "excludeFromPayload": true
        }
      }
    },
    "getByField": {
      "baseUrl": "common.rv-api.redventures.net/company/property/{searchColumn}/{searchValue}.json",
      "requiredFields": ["searchColumn", "searchValue"],
      "method": "get",
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        },
        "searchColumn": {
          "excludeFromPayload": true
        },
        "searchValue": {
          "excludeFromPayload": true
        }
      }
    }
  },
  "disclosure": {
    "get": {
        "baseUrl": "{company}.rv-api.redventures.net/disclosure/{disclosureKey}.json",
        "method": "get",
        "requiredFields": ["disclosureKey"],
        "fieldMeta": {
            "disclosureKey": {
                "excludeFromPayload": true
            }
        }
    },
    "update": {
        "baseUrl": "{company}.rv-api.redventures.net/disclosure/{disclosureKey}.json?sessionId={sessionId}&orderId={orderId}",
        "method": "put",
        "requiredFields": ["disclosureKey", "sessionId", "orderId"],
        "fieldMeta": {
            "disclosureKey": {
                "excludeFromPayload": true
            },
            "sessionId": {
                "excludeFromPayload": true
            }

        }
    }

  },
  "manual": {
    "createManual": {
      "baseUrl": "{company}.rv-api.redventures.net/manual.json",
      "method": "post",
      "requiredFields": ["company"],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        }
      }
    },
    "list": {
      "baseUrl": "{company}.rv-api.redventures.net/manual/agent/{agentId}/list.json",
      "method": "get",
      "requiredFields": ["company", "agentId"],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        },
        "agentId": {
          "excludeFromPayload": true
        }
      }
    },
    "cancel": {
      "baseUrl": "{company}.rv-api.redventures.net/manual/{manualId}/cancel.json",
      "method": "put",
      "requiredField": ["company", "manualId"],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        },
        "manualId": {
          "excludeFromPayload": true
        }
      }
    }
  },
  "subcontact": {
    "get": {
      "baseUrl": "{company}.rv-api.redventures.net/subcontact/{subcontactId}.json",
      "method": "get",
      "requiredFields": [
        "company",
        "subcontactId"
      ],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        },
        "subcontactId": {
          "excludeFromPayload": true
        }
      }
    },
    "createSubcontact": {
      "baseUrl": "{company}.rv-api.redventures.net/subcontact.json",
      "method": "post",
      "requiredFields": [
        "contactId",
        "company"
      ],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        }
      }
    },
    "updateSubcontact": {
      "baseUrl": "{company}.rv-api.redventures.net/subcontact/{subcontactId}.json",
      "method": "put",
      "requiredFields": ["company", "subcontactId"],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        },
        "subcontactId": {
          "excludeFromPayload": true
        }
      }
    }
  },
  "reactorSession": {
    "get": {
      "baseUrl": "{pod}.reactor-core.redventures.net:3001/session.json",
      "method": "get",
      "requiredFields": ["pod", "agent"],
      "fieldMeta": {
        "pod": {
          "excludeFromPayload": true
        }
      }
    }
  },
  "reactorInteractions": {
    "get": {
      "baseUrl": "{pod}.reactor-core.redventures.net:3001/interactions.json",
      "method": "get",
      "requiredFields": ["pod", "agent"],
      "fieldMeta": {
        "pod": {
          "excludeFromPayload": true
        }
      }
    }
  },
  "contactLog": {
    "get": {
      "baseUrl": "{company}.rv-api.redventures.net/contactlog/{contactId}.json",
      "method": "get",
      "requiredFields": ["company", "contactId"],
      "fieldMeta": {
        "contactId": {
          "exludeFromPayload": true
        }
      }
    }
  },
  "dnc": {
    "create": {
      "baseUrl": "common.rv-api.redventures.net/dnc.json",
      "method": "post",
      "requiredFields": ["phoneNumber", "companyId"],
      "fieldMeta": {
        "company": {
          "excludeFromPayload": true
        }
      }
    }
  }

}